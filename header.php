<!DOCTYPE html>
<html lang="en" style="margin-top:0 !important;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPSB</title>
    <?php wp_head(); ?>
</head>
<body>

<div id="page-<?php the_ID();?>" class="page-site <?php the_title() ?>">
    <header class="header-menu">
        <?php do_action('wpsb_before_menu'); ?>
        <div class="content-nav-menu">
            <a href="/">
                <img class="header-menu__logo" src="/wp-content/uploads/2021/10/iconSB.png">
            </a>
            <?php
                $args = array(
                    'menu_id' => 'sb-menu',
                    'menu_class' => 'sb-menu',
                    'theme_location' => 'main_menu',
                    'container' => 'nav',
                    'container_class' => 'nav_content'
                );
                wp_nav_menu($args);
            ?>
        </div>
    </header>