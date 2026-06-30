<?php
/**
 * Clarion Technologies Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

require_once CLARIONTECH_DIR . '/inc/template-helpers.php';

define( 'CLARIONTECH_VERSION', '1.0.0' );
define( 'CLARIONTECH_DIR', get_template_directory() );
define( 'CLARIONTECH_URI', get_template_directory_uri() );

// ── Theme Setup ──────────────────────────────────────────────
function clariontech_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
    add_theme_support( 'custom-logo', [
        'height'      => 80,
        'width'       => 200,
        'flex-width'  => true,
        'flex-height' => true,
    ] );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'clariontech' ),
        'footer'  => __( 'Footer Navigation', 'clariontech' ),
    ] );

    load_theme_textdomain( 'clariontech', CLARIONTECH_DIR . '/languages' );
}
add_action( 'after_setup_theme', 'clariontech_setup' );

// ── Enqueue Assets ────────────────────────────────────────────
function clariontech_assets() {
    // Google Fonts
    wp_enqueue_style(
        'clariontech-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap',
        [],
        null
    );

    // Theme stylesheet
    wp_enqueue_style(
        'clariontech-style',
        get_stylesheet_uri(),
        [ 'clariontech-fonts' ],
        CLARIONTECH_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'clariontech-main',
        CLARIONTECH_URI . '/js/main.js',
        [],
        CLARIONTECH_VERSION,
        true
    );

    // Pass AJAX URL to JS
    wp_localize_script( 'clariontech-main', 'ClarionTech', [
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'clariontech_nonce' ),
    ] );
}
add_action( 'wp_enqueue_scripts', 'clariontech_assets' );

// ── Contact Form AJAX Handler ─────────────────────────────────
function clariontech_handle_contact() {
    check_ajax_referer( 'clariontech_nonce', 'nonce' );

    $name    = sanitize_text_field( $_POST['ct_name'] ?? '' );
    $email   = sanitize_email( $_POST['ct_email'] ?? '' );
    $phone   = sanitize_text_field( $_POST['ct_phone'] ?? '' );
    $message = sanitize_textarea_field( $_POST['ct_message'] ?? '' );

    if ( empty( $name ) || empty( $email ) || ! is_email( $email ) ) {
        wp_send_json_error( [ 'message' => __( 'Please fill in all required fields correctly.', 'clariontech' ) ] );
    }

    $admin_email = get_option( 'admin_email' );
    $subject     = sprintf( __( 'New Consultation Request from %s', 'clariontech' ), $name );
    $body        = sprintf(
        "Name: %s\nEmail: %s\nPhone: %s\n\nMessage:\n%s",
        $name, $email, $phone, $message
    );
    $headers = [ 'Content-Type: text/plain; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>' ];

    if ( wp_mail( $admin_email, $subject, $body, $headers ) ) {
        wp_send_json_success( [ 'message' => __( 'Thank you! We will be in touch shortly.', 'clariontech' ) ] );
    } else {
        wp_send_json_error( [ 'message' => __( 'Something went wrong. Please try again.', 'clariontech' ) ] );
    }
}
add_action( 'wp_ajax_clariontech_contact',        'clariontech_handle_contact' );
add_action( 'wp_ajax_nopriv_clariontech_contact', 'clariontech_handle_contact' );

// ── Widget Areas ──────────────────────────────────────────────
function clariontech_widgets_init() {
    register_sidebar( [
        'name'          => __( 'Footer Column 1', 'clariontech' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ] );
}
add_action( 'widgets_init', 'clariontech_widgets_init' );

// ── Customizer Settings ───────────────────────────────────────
function clariontech_customizer( $wp_customize ) {
    // Hero section
    $wp_customize->add_section( 'hero_section', [
        'title'    => __( 'Hero Section', 'clariontech' ),
        'priority' => 30,
    ] );

    $fields = [
        'hero_headline_line1' => [ 'label' => 'Headline Line 1', 'default' => 'Accelerate AI-led Automation' ],
        'hero_headline_line2' => [ 'label' => 'Headline Line 2 (orange)', 'default' => 'with Expert Python Teams' ],
        'hero_description'    => [ 'label' => 'Description', 'default' => 'Your business runs on complexity, legacy data, and decision gates that slow every outcome down. Our Python-led intelligent workflows eliminate manual bottlenecks, accelerate delivery, and scale without disrupting your operations.' ],
        'hero_stat1_number'   => [ 'label' => 'Stat 1 Number', 'default' => '98%' ],
        'hero_stat1_label'    => [ 'label' => 'Stat 1 Label', 'default' => 'project success rate' ],
        'hero_stat2_number'   => [ 'label' => 'Stat 2 Number', 'default' => '1500+' ],
        'hero_stat2_label'    => [ 'label' => 'Stat 2 Label', 'default' => 'global deployments' ],
        'hero_stat3_number'   => [ 'label' => 'Stat 3 Number', 'default' => '40%' ],
        'hero_stat3_label'    => [ 'label' => 'Stat 3 Label', 'default' => 'faster time to market' ],
        'hero_form_title'     => [ 'label' => 'Form Card Title', 'default' => 'Book a Free 30-Minute Call' ],
    ];

    foreach ( $fields as $id => $args ) {
        $wp_customize->add_setting( $id, [ 'default' => $args['default'], 'sanitize_callback' => 'sanitize_text_field', 'transport' => 'refresh' ] );
        $wp_customize->add_control( $id, [ 'label' => $args['label'], 'section' => 'hero_section', 'type' => 'text' ] );
    }
}
add_action( 'customize_register', 'clariontech_customizer' );

// ── Helper: get_theme_mod with fallback ───────────────────────
function ct_mod( $key, $default = '' ) {
    return get_theme_mod( $key, $default );
}
