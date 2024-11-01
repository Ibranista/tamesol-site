<?php

/**
 * Template Name: about us page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>
<?php get_template_part('template-parts/jumbotron-section'); ?>

<section class="about-content-wrapper">
    <article class="about_tamesol">
        <h1 class="about_tam_title">About Tamesol</h1>
        <p class="about_desc">Monarch Prime took root during an era of construction known for backbreaking work ethics and doing the right thing. That
            mindset is woven into our business practices today.</p>
    </article>
    <article class="our_values_container">
        <div class="image_container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/values_picture.png" alt="our values" class="values_pic">
        </div>
        <div class="values_container_desc">
            <h1 class="story_title">Our story</h1>
            <p class="story_description">
                The owner was first exposed to the industry through
                weekend trips to job sites with her father, a successful
                commercial general contractor. She joined his company at
                14, performing secretarial duties and learning the nuances
                of estimating multi-million dollar commercial projects.
                Although she enjoyed her work at a thriving construction
                company, she chose to pursue a career in pediatric
                medicine. Still, her heart never left the trades. In 2009 she
                re-entered the construction scene in D.C, dually seeing
                patients and swinging a hammer for almost a decade.
                Although she enjoyed her work at a thriving construction
                company, she chose to pursue a career in pediatric
                medicine. Still, her heart never left the trades. In 2009 she
                re-entered the construction scene in D.C, dually seeing
                patients and swinging a hammer for almost a decade.
            </p>
        </div>
    </article>
</section>
<section class="about_promises_wrapper">
    <div class="about-section">
        <h1>Our promise</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit mus, imperdiet tempor faucibus nascetur vel et ante, non gravida praesent id nisi nunc maecenas. Magnis cum diam quisque etiam nostra ornare at, felis elementum lacinia commodo metus accumsan sed viverra, et facilisi luctus mi inceptos nisi. Placerat ligula taciti dignissim conubia donec rhoncus cursus vulputate, elementum habitant in sed etiam natoque duis nisi cubilia, nec dis netus tempor congue justo primis.</p>
    </div>
</section>
<section class="why-choose-us-section">
    <h1 class="why_us_title">WHY CHOOSE US</h1>
    <div class="why_us_container">
        <p class="intro_desc">
            There are hundreds of contractors you can choose to
            complete your project. What makes us different? Why
            should you choose us?
        </p>
        <section class="choose-us-box-wrapper">
            <div class="experience-cards">
                <div class="experience_card">
                    <h1 class="exp_title">
                        01 Comprehensive Media Solutions:
                    </h1>
                    <p class="exp_detail">
                        With decades of experience,
                        we can handle even the most
                        challenging of projects.
                    </p>
                </div>
                <div class="experience_card">
                    <h1 class="exp_title">
                        01 Comprehensive Media Solutions:
                    </h1>
                    <p class="exp_detail">
                        With decades of experience,
                        we can handle even the most
                        challenging of projects.
                    </p>
                </div>
                <div class="experience_card">
                    <h1 class="exp_title">
                        01 Comprehensive Media Solutions:
                    </h1>
                    <p class="exp_detail">
                        With decades of experience,
                        we can handle even the most
                        challenging of projects.
                    </p>
                </div>
                <div class="experience_card">
                    <h1 class="exp_title">
                        01 Comprehensive Media Solutions:
                    </h1>
                    <p class="exp_detail">
                        With decades of experience,
                        we can handle even the most
                        challenging of projects.
                    </p>
                </div>
            </div>
            <div class="auditorium_img_wrapper">
                <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/why_choose_us_auditorium.jpeg" class="large_img_audit" alt="auditorium" />
                <article class="camera_phone_img">
                    <div class="img_cards_wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/camera_setup.jpeg" alt="camera_setup" />
                    </div>
                    <div class="img_cards_wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tech_globe.png" alt="globe_icon" />
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