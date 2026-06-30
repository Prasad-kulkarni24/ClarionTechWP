<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
    <div class="container header-inner">

        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" rel="home" aria-label="<?php bloginfo( 'name' ); ?> – <?php esc_attr_e( 'Home', 'clariontech' ); ?>">
            <?php if ( has_custom_logo() ) :
                the_custom_logo();
            else : ?>
            <div class="logo-text">
                <div class="logo-icon" aria-hidden="true">
                    <?php echo clariontech_logo_svg(); ?>
                </div>
                <div class="logo-name">
                    <span class="top">CLARION</span>
                    <span class="bottom">TECHNOLOGIES</span>
                </div>
            </div>
            <?php endif; ?>
        </a>

        <!-- Primary Navigation -->
        <nav class="main-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'clariontech' ); ?>">
            <?php
            wp_nav_menu( [
                'theme_location' => 'primary',
                'menu_class'     => '',
                'container'      => false,
                'fallback_cb'    => 'clariontech_fallback_nav',
            ] );
            ?>
        </nav>

        <!-- CTA -->
        <div class="header-cta">
            <a href="#hero" class="btn btn-primary"><?php esc_html_e( 'Get a Free Quote', 'clariontech' ); ?></a>
        </div>

        <!-- Mobile Toggle -->
        <button class="mobile-menu-toggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'clariontech' ); ?>" aria-expanded="false" aria-controls="mobile-nav">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                <line x1="3" y1="6" x2="21" y2="6"/>
                <line x1="3" y1="12" x2="21" y2="12"/>
                <line x1="3" y1="18" x2="21" y2="18"/>
            </svg>
        </button>

    </div><!-- /.header-inner -->
</header>

<div class="mobile-nav" id="mobile-nav" aria-hidden="true">
    <?php
    wp_nav_menu( [
        'theme_location' => 'primary',
        'container'      => false,
        'fallback_cb'    => false,
    ] );
    ?>
    <a href="#hero" class="btn btn-primary"><?php esc_html_e( 'Get a Free Quote', 'clariontech' ); ?></a>
</div>
