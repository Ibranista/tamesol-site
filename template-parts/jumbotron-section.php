<?php
get_header();
$hero_section = get_field('hero-section');
$current_page = get_the_title();
$hero_title = $hero_section[0]['hero-title'];
$hero_subtitle = $hero_section[0]['hero-sub-title'];
$contact_us_btn = $hero_section[0]['btn-left'];
$hero_image = $hero_section[0]['hero-image'];

?>
<!-- hero-section for services news and events -->
</header>
<!-- check if hero_section exists -->
<?php if ($hero_section) : ?>
    <section class="main_hero_wrapper" style="<?php if ($current_page == 'Contact Us') : ?>background-image: url('<?= $hero_image[0]['hero-image']['url']; ?>');<?php endif; ?>">
        <section class="hero_main_section">
            <article class="left_hero_section">
                <p class="hero_title">
                    <?= $hero_title; ?>
                </p>
                <p class="hero_desc"><?= $hero_subtitle ?></p>
                <!-- check if contact us button exists -->
                <?php if ($contact_us_btn) : ?>
                    <div
                        class="explor_btn_wrapper"
                        style="display: flex; align-items: center">
                        <a href="<?php echo get_permalink(get_page_by_path('contact-us')); ?>"" style=" color:#fff;text-decoration:none;"><button class="button"><?= $contact_us_btn ?></button></a>
                    </div>
                <?php endif; ?>
            </article>
            <article class="right">
                <div class="responsive">
                    <?php foreach ($hero_image as $img) : ?>
                        <div class="img_wrapper_hero_jumbotron">
                            <?php if ($current_page != 'Contact Us') : ?>
                                <img src="<?= $img['hero-image']['url']; ?>" class="carousel-image hero_section_img" alt="<?= $img['hero-image']['alt']; ?>">
                            <?php endif; ?>
                            <!-- if contact us page -->
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if ($current_page == 'Contact Us') : ?>
                    <div class="contact-form">
                        <form>
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="first-name">First name</label>
                                    <input type="text" id="first-name" placeholder="First name">
                                </div>
                                <div class="form-control">
                                    <label for="last-name">Last name</label>
                                    <input type="text" id="last-name" placeholder="Last name">
                                </div>
                            </div>
                            <div class="form-control">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="Email address">
                            </div>
                            <div class="form-group">
                            </div>
                            <div class="form-control">
                                <label for="message">Message</label>
                                <textarea id="message" placeholder="Leave us a message..."></textarea>
                            </div>
                            <div class="form-control checkbox-control">
                                <input type="checkbox" id="privacy-policy">
                                <label for="privacy-policy">You agree to our friendly <a href="#">privacy policy</a></label>
                            </div>
                            <button type="submit" class="submit-button">Send message</button>
                        </form>
                    </div>
                <?php endif; ?>
            </article>
        </section>
    </section>
<?php endif; ?>