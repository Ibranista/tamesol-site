<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <title>
        <?php wp_title('|', true, 'right');
        bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    $social_links = get_field('social_links', 'option');
    ?>
    <header id="header" style="width:100%">
        <div class="social_links_wrapper">
            <ul class="social_links">
                <?php
                foreach ($social_links as $social_link) {
                ?>
                    <li class="social_link_item_wrapper">
                        <a href="<?php echo $social_link['link-url']; ?>" target="_blank">
                            <img src="<?php echo $social_link['social-icon']['url']; ?>" alt="<?php echo $social_link['link_label']; ?>" />
                            <p><?= $social_link['link-label'] ?></p>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <section class="nav_wrapper">
            <nav class="d-flex justify-between items-center main-nav-wrapper">
                <section class="logo_wrapper">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.png" alt="Logo" /></a>
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
                    <button class="contact_us_btn">
                        <a href="<?php echo get_permalink(get_page_by_path('contact-us')); ?>" style="color:#fff;text-decoration:none;">
                            Contact Us
                        </a>
                    </button>
                </section>
                <div class="hamburger" id="toggle_menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </section>