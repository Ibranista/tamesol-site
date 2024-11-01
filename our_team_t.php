<?php

/**
 * Template Name: our team
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>
<?php get_template_part('template-parts/jumbotron-section'); ?>
<div class="our_team_page">
    <h1>Meet Our Team</h1>

    <!-- Marketing Team Section -->
    <div class="team-section">
        <h2>Marketing Team</h2>
        <div class="team-container">
            <div class="team-member">
                <img src="
            <?php echo get_template_directory_uri(); ?>/assets/images/marketing_team.png" alt="Profile Photo">
                <h3>Jane Doe</h3>
                <p>Chief Marketing Officer</p>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_team.png" alt="Profile Photo">
                <h3>John Smith</h3>
                <p>Marketing Strategist</p>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_team.png" alt="Profile Photo">
                <h3>Alice Johnson</h3>
                <p>Content Creator</p>
            </div>
        </div>
    </div>

    <!-- Technology Team Section -->
    <div class="team-section">
        <h2>Technology Team</h2>
        <div class="team-container">
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_team.png" alt="Profile Photo">
                <h3>Michael Brown</h3>
                <p>CTO</p>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_team.png" alt="Profile Photo">
                <h3>Sarah Davis</h3>
                <p>Lead Developer</p>
            </div>
            <div class="team-member">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marketing_team.png" alt="Profile Photo">
                <h3>David Wilson</h3>
                <p>Full Stack Developer</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>