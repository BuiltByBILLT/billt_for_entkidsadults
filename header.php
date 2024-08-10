<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div class="container">
                <div class="logo">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <nav id="menu" role="navigation">
                    <?php wp_nav_menu(array('theme_location' => 'top-menu', 'menu_class' => 'top-menu')); ?>
                </nav>
            </div>
        </header>
        <div class="header-spacer"></div>