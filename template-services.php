<?php
/*
Template Name: Services List
*/

// Get the menu items from a specific menu location (replace 'header-location' with your menu slug)
$menu_name = 'header-location';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations[$menu_name]);
$menu_items = wp_get_nav_menu_items($menu->term_id);

// Filter only the second top-level <li> and its children
function get_second_menu_item($items)
{
    $top_level_items = [];

    // Find all top-level items (parent_id == 0)
    foreach ($items as $item) {
        if ($item->menu_item_parent == 0) {
            $top_level_items[] = $item;
        }
    }

    // Check if there's a second top-level <li> item
    if (isset($top_level_items[1])) { // '1' because array is zero-indexed
        return $top_level_items[1]; // Return the second top-level item
    }

    return null;
}

function render_second_menu_item($items, $parent_id)
{
    echo '<ul>';
    foreach ($items as $item) {
        if ($item->menu_item_parent == $parent_id) {
            echo '<li>';
            echo '<a href="' . $item->url . '">' . $item->title . '</a>';
            // Recursively render child items
            render_second_menu_item($items, $item->ID);
            echo '</li>';
        }
    }
    echo '</ul>';
}

get_header(); ?>

<div class="services-page">
    <h1 class="page-title">
        <div class="container">
            <?php the_title(); ?>
        </div>
    </h1>
    <div class="services-list container">
        <div class="main-col">

            <?php
            // Get the second top-level item
            $second_item = get_second_menu_item($menu_items);

            // If second top-level item exists, render it and its children
            if ($second_item) {
                render_second_menu_item($menu_items, $second_item->ID);
            } else {
                echo '<p>Content Not Found.</p>';
            }
            ?>
        </div>
        <div class="sidebar-container">
            <?php get_template_part("template-parts/sidebar"); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>