<?php

/**
 * Template Name: services page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>
<?php get_template_part('template-parts/jumbotron-section'); ?>
<article class="services_main_wrapper" style="margin-top: 52px;">
    <div class="services_card_section">
        <h2 class="section-title">Marketing and Branding Campaigns</h2>
        <div class="service-grid">
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Marketing Products and Organizations</p>
            </div>
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Commercials and Creative Ad Production</p>
            </div>
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Graphic Design & Visual Branding</p>
            </div>
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Media Planning and Placement</p>
            </div>
        </div>
    </div>

    <div class="services_card_section">
        <h2 class="section-title">TV and Radio Shows</h2>
        <div class="service-grid">
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Documentaries</p>
            </div>
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Drama & Films</p>
            </div>
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Q&A Programs</p>
            </div>
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Animation Production</p>
            </div>
        </div>
    </div>

    <div class="services_card_section">
        <h2 class="section-title">Event Management</h2>
        <div class="service-grid">
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Event Planning and Execution</p>
            </div>
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Organizing Press Conferences</p>
            </div>
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Organizing Events</p>
            </div>
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Mentoring Services</p>
            </div>
        </div>
    </div>

    <div class="services_card_section">
        <h2 class="section-title">Technological Solutions</h2>
        <div class="service-grid">
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Developing Websites & Mobile Apps</p>
            </div>
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Building SMS Gateway</p>
            </div>
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Content Management System</p>
            </div>
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                <p>Computer and System Integration</p>
            </div>
        </div>
    </div>
</article>
<?php get_footer(); ?>