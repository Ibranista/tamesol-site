<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title('|', true, 'right');
        bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header id="header" style="width:100%">
        <nav class="d-flex justify-between items-center">
            <section class="logo_wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.png" alt="Logo" />
            </section>

            <section id="site-navigation" class="nav_links">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                ));
                ?>
            </section>
            <section class="contact_wrapper">
                <button class="contact_us_btn">Contact Us</button>
            </section>
            <div class="hamburger" id="toggle_menu">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </nav>
    </header>

    <div id="content" class="site-content">