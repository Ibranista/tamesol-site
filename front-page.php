<?php
get_header();
$hero_section = get_field('hero_section');
if ($hero_section) {
    $hero_title = $hero_section['hero-title'];
    $hero_subtitle = $hero_section['hero-subtitle'];
    $explore_btn = $hero_section['explore-btn'];
    $contact_us_btn = $hero_section['contact-us-btn'];
}

$home_content = get_field('home-content');
$mission_vision = get_field('mission-vision');
$services_card = get_field('card');
$client_satisfaction = get_field('client-satisfaction');
?>
<script>
    console.log(<?php echo json_encode($client_satisfaction); ?>);
</script>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="main_hero_wrapper">
            <section class="hero_main_section">
                <article class="left_hero_section">
                    <p class="hero_title">
                        <?= $hero_title; ?>
                    </p>
                    <p class="hero_desc"><?= $hero_subtitle ?></p>
                    <div
                        class="explor_btn_wrapper"
                        style="display: flex; align-items: center">
                        <a href="/tamesol_website/portfolio" style="color:#fff;text-decoration:none;"><button class="button explore"><?= $explore_btn ?></button></a>
                        <a href="/" style="color:#fff;text-decoration:none;"><button class="button"><?= $contact_us_btn ?></button></a>
                    </div>
                </article>
                <article class="right">
                    <div class="responsive">
                        <div class="img_wrapper_hero_jumbotron"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/test_image.jpg" class="carousel-image hero_section_img" alt="Slide 1"></div>
                        <div class="img_wrapper_hero_jumbotron"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/test_image.jpg" class="carousel-image hero_section_img" alt="Slide 2"></div>
                        <div class="img_wrapper_hero_jumbotron"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/test_image.jpg" class="carousel-image hero_section_img" alt="Slide 3"></div>
                        <div class="img_wrapper_hero_jumbotron"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/test_image.jpg" class="carousel-image hero_section_img" alt="Slide 4"></div>
                        <div class="img_wrapper_hero_jumbotron"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/test_image.jpg" class="carousel-image hero_section_img" alt="Slide 5"></div>
                        <div class="img_wrapper_hero_jumbotron"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/test_image.jpg" class="carousel-image hero_section_img" alt="Slide 6"></div>
                    </div>
                </article>
            </section>
        </section>
        </header>
        <section class="vision-mission">
            <h2>
                <?= $home_content[0]['content-header']; ?>
            </h2>
            <p>
                <?= $home_content[0]['content-title']; ?>
            </p>

            <div class="cards">

                <?php foreach ($mission_vision as $mv) : ?>
                    <div class="card">
                        <div class="card_icon_wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vision_icon.svg" alt="Vision Icon" class="icon">
                        </div>
                        <h3><?= $mv['card-title']; ?></h3>
                        <p><?= $mv['card-description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- who we are -->
        <section class="who-we-are">
            <article class="who-we-are-inner">
                <div class="content">
                    <h2><?= $home_content[1]['content-header']; ?></h2>
                    <!-- <p>
                        <?= $home_content[1]['content-desc']; ?>
                    </p> -->

                    <p class="p1">We pride ourselves on <span class="highlight">serving top clients</span> with high-quality, trusted services that exceed expectations and drive success.</p>
                    <p class="p3">We are dedicated to <span class="highlight">producing impactful content</span>.</p>
                    <p class="p4">We offer <span class="highlight">diverse skills</span> and cutting-edge <span class="highlight">technology</span>.</p>
                    <p class="p2">Our focus is on delivering <span class="highlight">innovative tech solutions</span>.</p>

                </div>
                <div class="image-and-stats">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/who_we_are.jpg" alt="Who We Are">
                    </div>
                    <div class="stats">
                        <div class="stat">
                            <span class="stat-number">+100</span>
                            <span class="stat-text">Projects Completed</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">+8</span>
                            <span class="stat-text">Years Experience</span>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        <section class="our-services">
            <h2>Our Services</h2>
            <p class="subtitle">Transform your brand with our innovative digital solutions that captivate and engage your audience.</p>

            <div class="services-container">
                <?php foreach ($services_card as $service) : ?>
                    <div class="service-card">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/edit_pen_icon.svg" alt="Service Icon">
                        </div>
                        <h3><?= $service['card-title']; ?></h3>
                        <p><?= $service['card-content']; ?></p>
                        <?php foreach ($service['card-buttons'] as $button) : ?>
                            <button><?= $button['button-name']; ?></button>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="previous-projects">
            <div class="project-section">
                <article class="project_img_wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/previous_project.png" alt="Project Image">
                </article>
                <div class="past_projects_content">
                    <h2 class="past_projects_title">Past Projects</h2>
                    <p>In our 80+ years of operation, we've completed many successful projects in Ethiopia's different regions. Take a look to see what we can do for you!</p>
                    <a href="#" class="btn">View All Projects</a>
                </div>
            </div>
        </section>
        <!-- client satisfaction -->
        <section class="client_satisfaction_wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star_icon.png" alt="star icon">
            <h3>Positive Feedback</h3>
            <h2>Client Satisfaction</h2>
            <div class="feedback-section">
                <?php foreach ($client_satisfaction as $satisfaction) : ?>
                    <div class="feedback-card">
                        <p><?= $satisfaction['card-description']; ?></p>
                        <div class="client-info">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client_img.png" alt="Abebe Kebede">
                            <h4><?= $satisfaction['card-title']; ?></h4>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php get_template_part('template-parts/trusted-by'); ?>
    </main>
</div>

<?php get_footer(); ?>