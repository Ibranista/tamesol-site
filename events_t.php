<?php

/**
 * Template Name: events page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

$events_video = get_field('events-video');
$tamesol_services = get_field('events-card-content');
// extract -> event-title, event-image and event-description from array of object from tamesol_services
?>

<section class="main_hero_wrapper">
    <section class="hero_main_section events_hero_section">
        <div class="video-background">
            <video autoplay muted loop>
                <source src="<?php echo $events_video['url']; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="event_jumbotron_content">
                <div class="event_hero_content_wrapper">
                    <h1 class="event_hero_title">Tamesole Events, Unmatched Excellence</h1>
                    <p class="event_hero_description">
                        Tamesol’s Event Management Unit orchestrates national and international programs with precision, attracting global participants and influential leaders
                    </p>
                    <!-- explore events card -->
                    <div class="explore_events_btn_wrapper">
                        <a href="#" style="text-decoration:none;" class="explore_events_link">
                            Explore Events
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
</header>

<article class="event_section_wrapper" id="event_section_wrapper">
    <?php
    foreach ($tamesol_services as $tamesol_service) {
    ?>
        <section class="event_card_wrapper">
            <div class="event_content">
                <h1><?php echo $tamesol_service['event-title']; ?></h1>
                <p>
                    <?php echo $tamesol_service['event-description']; ?>
                </p>
            </div>
            <div class="event_image" style="width:50%;">
                <img src="<?php echo $tamesol_service['event-image']['url']; ?>" style="width:100%;" />
            </div>
        </section>
    <?php
    }
    ?>
</article>

<?php get_footer(); ?>