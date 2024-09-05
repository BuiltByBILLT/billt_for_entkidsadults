<?php

// Load styles
function load_css()
{
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', false);

    wp_register_style('blocks', get_template_directory_uri() . '/css//blocks.css', array(), false, 'all');
    wp_enqueue_style('blocks');

    wp_register_style('mystyles', get_template_directory_uri() . '/css/mystyles.css', array(), false, 'all');
    wp_enqueue_style('mystyles');
}
add_action('wp_enqueue_scripts', 'load_css');

// Load scripts
function load_js()
{
    // Changes urls to relative when in development
    wp_register_script('adjust-links', get_template_directory_uri() . '/js/adjust-links.js', array(), false, true);
    wp_enqueue_script('adjust-links');

    // Transparent Header
    wp_register_script('transparent-header', get_template_directory_uri() . '/js/transparent-header.js', array(), false, true);
    wp_enqueue_script('transparent-header');

    // Hamburger Menu
    wp_register_script('hamburger', get_template_directory_uri() . '/js/hamburger.js', array(), false, true);
    wp_enqueue_script('hamburger');

    // Mobile Menu Dropdown
    wp_register_script('mobile-menu-dropdown', get_template_directory_uri() . '/js/mobile-menu-dropdown.js', array(), false, true);
    wp_enqueue_script('mobile-menu-dropdown');

    // FAQ accordion
    wp_register_script('faq-accordian', get_template_directory_uri() . '/js/faq-accordian.js', array(), false, true);
    wp_enqueue_script('faq-accordian');
}
add_action('wp_enqueue_scripts', 'load_js');


//Theme Options
add_theme_support('menus');
add_theme_support('custom-logo');


//Menus
register_nav_menus(
    array(
        'desktop-header-location' => 'Desktop Header Location',
        'footer-location' => 'Footer Location',
        'mobile-header-location' => 'Mobile Header Location'
    )
);

function add_dropdown_button_to_menu($args, $item, $depth)
{
    if (is_array($item->classes) && in_array('menu-item-has-children', $item->classes)) {
        $args->after = '<button class="dropdown-toggle" aria-expanded="false">▼</button>';
    } else {
        $args->after = '';
    }
    return $args;
}
add_filter('nav_menu_item_args', 'add_dropdown_button_to_menu', 10, 3);
