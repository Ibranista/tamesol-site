<?php
$client_satisfaction = get_field('client-satisfaction');
?>

<!-- trusted by section -->
<!-- <section class="trusted_by_section">
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
</section> -->

<section class="client_satisfaction_wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star_icon.png" alt="star icon">
    <h2>Trusted by <span style="color:#22A8E0">50+</span> Companies</h2>
    <div class="feedback-carousel">
        <?php foreach ($client_satisfaction as $satisfaction) : ?>
            <article class="feedback-card">
                <div class="client-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client_img.png" alt="Abebe Kebede">
                    <h4><?= $satisfaction['card-title']; ?></h4>
                </div>
                <p><?= $satisfaction['card-description']; ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>