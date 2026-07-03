<?php
/**
 * Front Page Template
 */
get_header();
?>

<main id="main-content" role="main">

    <?php get_template_part( 'template-parts/hero' ); ?>

    <?php get_template_part( 'template-parts/services' ); ?>

    <?php
    // More sections (About, Portfolio, Testimonials, etc.) will be added here
    ?>

</main>

<?php
get_footer();
