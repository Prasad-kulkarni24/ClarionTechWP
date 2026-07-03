<?php
/**
 * Front Page Template
 */
get_header();
?>

<main id="main-content" role="main">

    <?php get_template_part( 'template-parts/hero' ); ?>

    <?php get_template_part( 'template-parts/services' ); ?>

    <?php get_template_part( 'template-parts/industries' ); ?>

    <?php get_template_part( 'template-parts/case-studies' ); ?>

    <?php get_template_part( 'template-parts/why-clarion' ); ?>

    <?php get_template_part( 'template-parts/testimonials' ); ?>

    <?php get_template_part( 'template-parts/engineers' ); ?>

    <?php get_template_part( 'template-parts/cta-banner' ); ?>

    <?php
    // More sections will be added here
    ?>

</main>

<?php
get_footer();
