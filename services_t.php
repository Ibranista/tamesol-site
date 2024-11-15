<?php

/**
 * Template Name: services page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

$tamesol_services = get_field('tamesol-services');

?>
<?php get_template_part('template-parts/jumbotron-section'); ?>
<article class="services_main_wrapper" style="margin-top: 52px;">
    <?php foreach ($tamesol_services as $service) : ?>
        <div class="services_card_section">
            <h2 class="section-title"><?= $service['service-type-name'] ?></h2>
            <p class="service-general-description"><?= $service['service-type-description'] ?></p>
            <div class="service-grid">
                <?php foreach ($service['service-lists'] as $service_items): ?>
                    <div class="service-item">
                        <div class="service-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_icon.png" alt="Icon">
                        </div>
                        <p class="service-title"><?= $service_items['service-title'] ?></p>
                        <p class="service-general-description"><?= $service_items['service-description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</article>
<?php get_footer(); ?>