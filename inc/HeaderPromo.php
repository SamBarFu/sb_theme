<?php

class HeaderPromo extends WP_Widget{

    public function __construct(){
        parent::__construct(
            'header-promo-widget',
            __('Header Promo', 'wpsb')
        );     
    }

    function widget($args, $instance){
        echo $args['before_widget'];
        echo '<p class="text-promo">' . $instance["text"] . '</p>';
        echo $args['after_widget'];
    }

    public function form($instance){
        $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( '', 'wpsb' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text' ) ); ?>"><?php echo esc_html__( 'Text:', 'wpsb' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
        </p>
        <?php
    }

    public function update($new_instance, $old_instance){
        $instance = array();

        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';
 
        return $instance;
    }

}

function wpsb_header_promo(){
    
	register_sidebar( array(
		'name'          => __( 'Top Header', 'wpsb' ),
		'id'            => 'top-header',
		'description'   => __( 'Muestra un texto en la parte superior izquierda del header', 'wpsb'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	) );

    register_widget('HeaderPromo');
}
add_action('widgets_init', 'wpsb_header_promo');

function text_promo_header_top(){
    if(is_active_sidebar( 'top-header' )){
        dynamic_sidebar( 'top-header' );
    }
}
add_action('wpsb_before_menu', 'text_promo_header_top');