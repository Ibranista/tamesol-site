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
    // frontpage styles
    wp_enqueue_style('frontpage-style', get_template_directory_uri() . '/assets/styles/frontpage.style.css');
    // footer styles
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/styles/footer.style.css');
    // about us page
    wp_enqueue_style('about-page-style', get_template_directory_uri() . '/assets/styles/about.style.css');
    // gsap for the carousel section on front-page
    // services page
    wp_enqueue_style('services-page-style', get_template_directory_uri() . '/assets/styles/services.style.css');
    // portfolio page
    wp_enqueue_style('portfolio-page-style', get_template_directory_uri() . '/assets/styles/portfolio.style.css');

    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js',
        [],
        '3.6.1',
        true
    );
    // zepto for the carousel section on front-page
    wp_enqueue_script(
        'zepto',
        'https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.min.js',
        [],
        '1.2.0',
        true // Load in footer
    );
    // script for carousel section on front-page
    wp_enqueue_script('gsap_carousel-script', get_template_directory_uri() . '/assets/scripts/gsap_carousel.js', false);
}
add_action('wp_enqueue_scripts', 'tamesontheme_enqueue_styles');
