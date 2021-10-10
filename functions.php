<?php 

require_once dirname( __FILE__ ) . '/inc/HeaderPromo.php';

function wpsb_styles(){
    // The main styles sheet
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css', array(), '1.0.0');
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css', array(), '1.0.0'); 
    wp_enqueue_style('base', get_template_directory_uri() . '/css/base.css', array(), '1.0.0');
    wp_enqueue_style('sb-woocommerce-style', get_template_directory_uri() . '/css/sb-woocommerce-styles.css', array(), '1.0.0');

    //style plugin sb shipping location
    /* wp_enqueue_style('sb-shipping-styles', get_template_directory_uri() . '/css/sb-shipping-styles.css', array(), '1.0.0'); */

    //slicknav
    wp_enqueue_style('slicknav-css', get_template_directory_uri() . '/css/slicknav.min.css', array(), '2.0.1');
    wp_enqueue_script('slicknav-js', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '2.0.1', false);
}
add_action('wp_enqueue_scripts', 'wpsb_styles');


function wpsb_menus(){
    register_nav_menus(
        array(
            'main_menu' => __('Main menu', 'wpsb'),
            'secondary_menu' => __('Secondary menu', 'wpsb')
        )
    );
}
add_action('init', 'wpsb_menus');
