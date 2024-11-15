<footer class="footer_wrapper">
    <?php
    $social_links = get_field('social_links', 'option');
    ?>
    <div class="lets_talk">
        <h1 class="contact_us">CONTACT US TODAY TO DISCUSS HOW TAMESOL COMMUNICATIONS CAN HELP YOU ACHIEVE YOUR GOALS !</h1>
        <div class="btn_wrapper_lets">
            <button class="lets_talk_btn"><a href="<?php echo get_permalink(get_page_by_title('Contact Us')); ?>" style="text-decoration:none;color:#fff;">LET'S TALK</a></button>
        </div>
    </div>

    <div class="footer">
        <div class="footer-section">
            <div>
                <h3>Let's Talk</h3>
                <p>Email: <a href="https://www.tamesolcommunications.com" style="text-decoration:none;color:#fff;">tamesolcommunications.com</a></p>
                <p>Phone: +251910986753</p>
            </div>
            <div>
                <h3>Visit Us</h3>
                <p>Bole Road, Mega Building</p>
                <p>3rd Floor</p>
            </div>
            <div>
                <h3>Info</h3>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Blog</a>
            </div>
            <div class="footer_social_links">
                <h3>Social Links</h3>
                <?php
                foreach ($social_links as $social_link) {
                ?>
                    <a href="<?php echo $social_link['link-url']; ?>" target="_blank">
                        <img src="<?php echo $social_link['social-icon']['url']; ?>" alt="<?php echo $social_link['link_label']; ?>" />
                        <p><?= $social_link['link-label'] ?></p>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="bottom-bar">
            <article class="company_copy_right">
                <p>2024 by Tamesol PLC</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/up_arrow.svg" alt="up arrow Icon" class="icon" id="scrollTopBtn">
            </article>
            <p class="dev_by">Developed by <a href="#"> Tamesol Communications </a></p>
        </div>
    </div>

</footer>