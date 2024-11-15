<?php

/**
 * Template Name: about us page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

$page_title = get_field('page-title');
$page_description = get_field('page-description');
$page_image = get_field('about-company-image');

$story_group = get_field('story-content');
$story_image = $story_group['story-image'];
$story_title = $story_group['story-title'];
$story_description = $story_group['story-description'];

$our_promise = get_field('our-promise');
$promise_bg_img = $our_promise['promise-bg-image'];
$our_promise_title = $our_promise['our-promise-title'];
$our_promise_description = $our_promise['promise-description'];


$why_choose_us = get_field('why-choose-us-section');
$why_us_title = $why_choose_us['why-us-title'];
$why_us_subtitle = $why_choose_us['why-subtitle'];
$why_us_image = $why_choose_us['why-us-image'];
$why_us_cards = $why_choose_us['why-us-cards'];
$bottom_image_one = $why_choose_us['buttom-image-one'];
$bottom_image_two = $why_choose_us['bottom-image-two'];

?>


<?php get_template_part('template-parts/jumbotron-section'); ?>

<section class="about-content-wrapper">
    <article class="about_tamesol">
        <h1 class="about_tam_title">
            <?= $page_title ?>
        </h1>
        <p class="about_desc">
            <?= $page_description ?>
        </p>
    </article>
    <article class="our_values_container">
        <div class="image_container">
            <img src="<?= $page_image['url'] ?>" alt="<?= $page_image['alt'] ?>" class="values_pic">
        </div>
        <div class="values_container_desc">
            <h1 class="story_title">Our story</h1>
            <p class="story_description">
                <?= $story_description ?>
            </p>
        </div>
    </article>
</section>
<section class="about_promises_wrapper"
    style="background-image: url('<?= $promise_bg_img['url'] ?>');">
    <div class="about-section">
        <h1>
            <?= $our_promise_title ?>
        </h1>
        <p>
            <?= $our_promise_description ?>
        </p>
    </div>
</section>
<section class="why-choose-us-section">
    <h1 class="why_us_title">
        <?= $why_us_title ?>
    </h1>
    <div class="why_us_container">
        <p class="intro_desc">
            <?= $why_us_subtitle ?>
        </p>
        <section class="choose-us-box-wrapper">
            <div class="experience-cards">
                <?php foreach ($why_us_cards as $card) : ?>
                    <div class="experience_card">
                        <h1 class="exp_title">
                            <?= $card['why-title'] ?>
                        </h1>
                        <p class="exp_detail">
                            <?= $card['why-description'] ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="auditorium_img_wrapper">
                <img src="<?= $why_us_image['url'] ?>" alt="<?= $why_us_image['alt'] ?>" />
                <article class="camera_phone_img">
                    <div class="img_cards_wrapper">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/camera_setup.jpeg" alt="camera_setup" /> -->
                        <img src="<?= $bottom_image_one['url'] ?>" alt="<?= $bottom_image_one['alt'] ?>" />
                    </div>
                    <div class="img_cards_wrapper">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tech_globe.png" alt="globe_icon" /> -->
                        <img src="<?= $bottom_image_two['url'] ?>" alt="<?= $bottom_image_two['alt'] ?>" />
                    </div>
                </article>
            </div>
            <button class="explore-btn">
                <p>Explore Our work</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-arrow-right.svg" alt="right_arrow" class="explore-right-arrow" />
            </button>
        </section>
    </div>
</section>
<?php get_template_part('template-parts/trusted-by'); ?>

<?php get_footer(); ?>