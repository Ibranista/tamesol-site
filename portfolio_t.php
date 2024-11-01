<?php

/**
 * Template Name: portfolio page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>
<?php get_template_part('template-parts/jumbotron-section'); ?>
<section class="portfolio_showcase_page">
    <h1>Our Portfolio Showcase</h1>
    <div class="portfolio-container">
        <?php
        for ($i = 0; $i < 12; $i++) {
        ?>
            <div class="portfolio-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/show_case_globe.png" alt="Portfolio Image">
                <div class="portfolio-content">
                    <h2 class="portfolio-title">Project Alpha</h2>
                    <p class="portfolio-description">An innovative project focusing on global solutions for modern business needs. The portfolio showcases its range of advanced technological implementations.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>
<?php get_footer(); ?>