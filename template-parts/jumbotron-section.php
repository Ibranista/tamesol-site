<?php
get_header();
$hero_section = get_field('hero-section');
$current_page = get_the_title();
if ($hero_section) {
    foreach ($hero_section as $hero) {
        if ($hero['page-name'] == $current_page) {
            $hero_title = $hero['hero-title'];
            $hero_subtitle = $hero['hero-sub-title'];
            $contact_us_btn = $hero['btn-left'];
            $hero_image = $hero['hero-image'];
        }
    }
}

?>
<script>
    console.log(<?php echo json_encode($hero_image); ?>);
</script>
<!-- hero-section for services news and events -->
</header>
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
                <a href="/" style="color:#fff;text-decoration:none;"><button class="button"><?= $contact_us_btn ?></button></a>
            </div>
        </article>
        <article class="right">
            <div class="responsive">
                <?php foreach ($hero_image as $img) : ?>
                    <div class="img_wrapper_hero_jumbotron"><img src="<?= $img['hero-image']['url']; ?>" class="carousel-image hero_section_img" alt="<?= $img['hero-image']['alt']; ?>"></div>
                <?php endforeach; ?>
            </div>
        </article>
    </section>
</section>