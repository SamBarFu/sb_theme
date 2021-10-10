<?php get_header(); ?>

<main class="main">
    <?php while(have_posts()): the_post(); ?>
        <div class="content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</main>

<?php get_footer() ?>