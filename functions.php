<?php

// Load styles
function load_css()
{
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', false);

    // wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), false, 'all');
    // wp_enqueue_style('bootstrap');

    wp_register_style('blocks', get_template_directory_uri() . '/css//blocks.css', array(), false, 'all');
    wp_enqueue_style('blocks');

    wp_register_style('mystyles', get_template_directory_uri() . '/css/mystyles.css', array(), false, 'all');
    wp_enqueue_style('mystyles');

    wp_register_style('header', get_template_directory_uri() . '/css/header.css', array(), false, 'all');
    wp_enqueue_style('header');
}
add_action('wp_enqueue_scripts', 'load_css');

// Load scripts
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js//bootstrap/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

    // Changes urls to relative when in development
    wp_register_script('adjust-links', get_template_directory_uri() . '/js/adjust-links.js', array(), false, true);
    wp_enqueue_script('adjust-links');
}
add_action('wp_enqueue_scripts', 'load_js');


//Theme Options
add_theme_support('menus');
add_theme_support('custom-logo');


//Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'footer-menu' => 'Footer Menu',
        'mobile-menu' => 'Mobile Menu'
    )
);
