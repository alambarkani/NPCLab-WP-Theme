<?php

function npclab_theme_support()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'npclab_theme_support');

function npclab_menus()
{
    $locations = array(
        'primary' => "Main Menu",
        'footer' => "Footer Menu",
    );
    register_nav_menus($locations);
}

add_action('init', 'npclab_menus');

function npclab_register_styles()
{
    wp_enqueue_style('npclab_styles', get_template_directory_uri() . '/style.css', array(), null, false);
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/src/output.css', array(), null, false);
}
add_action('wp_enqueue_scripts', 'npclab_register_styles');

function npclab_register_scripts()
{
    wp_enqueue_script('preline', get_template_directory_uri() . '/node_modules/preline/dist/preline.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'npclab_register_scripts');

// Add this to your theme's functions.php file
add_filter('show_admin_bar', '__return_false');
