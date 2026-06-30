<?php
/**
 * Template helper functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Returns the Clarion Technologies logo SVG markup.
 */
function clariontech_logo_svg() {
    return '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
    </svg>';
}

/**
 * Fallback nav when no menu is assigned.
 */
function clariontech_fallback_nav() {
    echo '<ul>';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'clariontech' ) . '</a></li>';
    echo '<li><a href="#">' . esc_html__( 'Services', 'clariontech' ) . '</a></li>';
    echo '<li><a href="#">' . esc_html__( 'About', 'clariontech' ) . '</a></li>';
    echo '<li><a href="#">' . esc_html__( 'Portfolio', 'clariontech' ) . '</a></li>';
    echo '<li><a href="#">' . esc_html__( 'Contact', 'clariontech' ) . '</a></li>';
    echo '</ul>';
}
