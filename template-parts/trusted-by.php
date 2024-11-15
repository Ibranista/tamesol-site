<?php
$client_satisfaction = get_field('client-satisfaction', 'options');
?>
<section class="client_satisfaction_wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/star_icon.png" alt="star icon">
    <h2>Trusted by <span style="color:#22A8E0">50+</span> Companies</h2>
    <div class="feedback-carousel">
        <?php if ($client_satisfaction) : ?>
            <?php foreach ($client_satisfaction as $satisfaction) : ?>
                <article class="feedback-card">
                    <div class="client-info">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client_img.png" alt="Abebe Kebede">
                        <h4><?= esc_html($satisfaction['client-company-name']); ?></h4>
                    </div>
                    <p><?= esc_html($satisfaction['client-company-description']); ?></p>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>