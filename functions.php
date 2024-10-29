<?php
function my_theme_setup()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'text_domain'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

function tamesontheme_enqueue_styles()
{
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/styles/header.style.css');
    wp_enqueue_script('basic-script', get_template_directory_uri() . '/assets/scripts/basic.js', false);
}
add_action('wp_enqueue_scripts', 'tamesontheme_enqueue_styles');
