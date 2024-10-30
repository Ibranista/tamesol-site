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
        <!-- our services -->
        <section class="our-services">
            <h2>Our Services</h2>
            <p class="subtitle">Transform your brand with our innovative digital solutions that captivate and engage your audience.</p>

            <div class="services-container">
                <div class="service-card">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/edit_pen_icon.svg" alt="Service Icon">
                    </div>
                    <h3>Marketing & Promotion</h3>
                    <p>At Squareup, our design team is passionate about creating stunning, user-centric designs that captivate your audience and elevate your brand. We believe that great design is not just about aesthetics; it’s about creating seamless and intuitive user experiences.</p>
                    <button>Learn More</button>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/edit_pen_icon.svg" alt="Service Icon">
                    </div>
                    <h3>Radio & TV Production</h3>
                    <p>At Squareup, our design team is passionate about creating stunning, user-centric designs that captivate your audience and elevate your brand. We believe that great design is not just about aesthetics; it’s about creating seamless and intuitive user experiences.</p>
                    <button>Learn More</button>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/edit_pen_icon.svg" alt="Service Icon">
                    </div>
                    <h3>Animation Services</h3>
                    <p>At Squareup, our design team is passionate about creating stunning, user-centric designs that captivate your audience and elevate your brand. We believe that great design is not just about aesthetics; it’s about creating seamless and intuitive user experiences.</p>
                    <button>Learn More</button>
                </div>

                <div class="service-card">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/edit_pen_icon.svg" alt="Service Icon">
                    </div>
                    <h3>Technology Solutions</h3>
                    <p>At Squareup, our design team is passionate about creating stunning, user-centric designs that captivate your audience and elevate your brand. We believe that great design is not just about aesthetics; it’s about creating seamless and intuitive user experiences.</p>
                    <button>Learn More</button>
                </div>
            </div>
        </section>
        <!-- past projects -->
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
                <div class="feedback-card">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, augue risus magnis parturient netus consequat per, mattis penatibus a.</p>
                    <div class="client-info">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client_img.png" alt="Abebe Kebede">
                        <h4>Abebe Kebede</h4>
                    </div>
                </div>
                <div class="feedback-card">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, augue risus magnis parturient netus consequat per, mattis penatibus a.</p>
                    <div class="client-info">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client_img.png" alt="Abraham Alem">
                        <h4>Abraham Alem</h4>
                    </div>
                </div>
                <div class="feedback-card">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, augue risus magnis parturient netus consequat per, mattis penatibus a.</p>
                    <div class="client-info">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client_img.png" alt="Rahel Markos">
                        <h4>Rahel Markos</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- trusted by section -->
        <section class="trusted_by_section">
            <div class="trusted_header_title">
                <h2 class="trusted_by_title">Trusted By 50+ Companies</h2>
            </div>
            <div class="gained_trusts">
                <div class="company_gained_wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/amhara_bank.png" alt="amhara_bank_icon" />
                </div>
                <div class="company_gained_wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/giz.png" alt="giz" />
                </div>
                <div class="company_gained_wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/telecom.png" alt="telecom" />
                </div>
                <div class="company_gained_wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cbe.png" alt="cbe" />
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>