<?php

function load_css()
{
    wp_register_style('blankslate', get_template_directory_uri() . '/css//blankslate.css', array(), false, 'all');
    wp_enqueue_style('blankslate');
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('blocks', get_template_directory_uri() . '/css//blocks.css', array(), false, 'all');
    wp_enqueue_style('blocks');
    wp_register_style('mystyles', get_template_directory_uri() . '/css/mystyles.css', array(), false, 'all');
    wp_enqueue_style('mystyles');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js//bootstrap/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');
