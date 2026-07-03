<?php
/**
 * Main template file — serves as fallback for all templates.
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

    <?php
    // Additional page sections will be added here as more designs are shared
    ?>

</main>

<?php
get_footer();
