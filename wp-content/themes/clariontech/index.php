<?php
/**
 * Main template file — serves as fallback for all templates.
 */
get_header();
?>

<main id="main-content" role="main">

    <?php get_template_part( 'template-parts/hero' ); ?>

    <?php
    // Additional page sections will be added here as more designs are shared
    ?>

</main>

<?php
get_footer();
