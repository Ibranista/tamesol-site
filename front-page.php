<?php

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section
            class="hero_jumbotron"
            style="position: relative; overflow-y: hidden">
            <article
                class="jumbo_header_intro"
                style="display: flex; flex-direction: column; align-items: center">
                <h1 class="connecting_stories">Connecting Stories, Creating Impact</h1>
                <p class="message_crafts">
                    Expertly crafting your message through innovative media and technology
                    solutions
                </p>
            </article>
            <!-- <div class="carousel_structure stage">
                <div class="carousel_structure container">
                    <div class="carousel_structure ring">
                        <div class="carousel_structure hero_carousel_img"></div>
                        <div class="carousel_structure hero_carousel_img"></div>
                        <div class="carousel_structure hero_carousel_img"></div>
                        <div class="carousel_structure hero_carousel_img"></div>
                        <div class="carousel_structure hero_carousel_img"></div>
                        <div class="carousel_structure hero_carousel_img"></div>
                        <div class="carousel_structure hero_carousel_img"></div>
                        <div class="carousel_structure hero_carousel_img"></div>
                        <div class="carousel_structure hero_carousel_img"></div>
                        <div class="carousel_structure hero_carousel_img"></div>
                    </div>
                </div>
            </div> -->
            <div
                class="explor_btn_wrapper"
                style="display: flex; justify-content: center; align-items: center">
                <button class="button explore">Explore Our Works</button>
                <button class="button">Contact Us</button>
            </div>
        </section>
        <section class="vision-mission">
            <h2>Our Vision And Mission</h2>
            <p>Amplify important societal messages through innovative media solutions, connecting organizations with their audiences and driving positive change</p>

            <div class="cards">
                <div class="card">
                    <div class="card_icon_wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vision_icon.svg" alt="Vision Icon" class="icon">
                    </div>
                    <h3>Vision</h3>
                    <p>To be the leading media company, recognized for creativity, expertise, and commitment to impactful communication.</p>
                </div>
                <div class="card">
                    <div class="card_icon_wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission_icon.png" alt="Mission Icon" class="icon">
                    </div>
                    <h3>Mission</h3>
                    <p>Our mission is to amplify the voices and messages that matter most to society through innovative media and technology solutions.</p>
                </div>
            </div>
        </section>
        <!-- who we are -->
        <section class="who-we-are">
            <div class="content">
                <h2>Who We Are</h2>
                <p>
                    Tamseal Communications is a limited company that comprises a diverse set of knowledge, skills, and the necessary supporting technology to seamlessly deliver marketing and promotion campaigns.
                    It also makes radio and TV programs and commercials, as well as documentary films. These are delivered using either our highly experienced production team using onsite and studio settings, as well as our acclaimed animation department, which excels at making animated features, series, as well as logos and intros in either 2D or 3D.
                    Tamseal technology arm provides technology solutions such as conferencing equipment, telephony systems, IT equipment, networks, service support, and web design and development. This capability allows Tamseal to deliver high-quality service to a multitude of clients; ranging from senior government departments to regional governments, large multinationals, as well as prominent non-governmental non-profit organizations.
                </p>
            </div>
            <div class="image-and-stats">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/who_we_are.jpg" alt="Who We Are">
                </div>
                <div class="stats">
                    <div class="stat">
                        <span class="stat-number">+50</span>
                        <span class="stat-text">Projects Completed</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">+8</span>
                        <span class="stat-text">Years Experience</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>