<?php
function my_theme_setup()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'text_domain'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');
