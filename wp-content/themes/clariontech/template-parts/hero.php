<?php
/**
 * Hero Section Template Part
 */

$headline1   = ct_mod( 'hero_headline_line1', 'Accelerate AI-led Automation' );
$headline2   = ct_mod( 'hero_headline_line2', 'with Expert Python Teams' );
$description = ct_mod( 'hero_description', 'Your business runs on complexity, legacy data, and decision gates that slow every outcome down. Our Python-led intelligent workflows eliminate manual bottlenecks, accelerate delivery, and scale without disrupting your operations.' );

$stat1_num   = ct_mod( 'hero_stat1_number', '98%' );
$stat1_lbl   = ct_mod( 'hero_stat1_label',  'project success rate' );
$stat2_num   = ct_mod( 'hero_stat2_number', '1500+' );
$stat2_lbl   = ct_mod( 'hero_stat2_label',  'global deployments' );
$stat3_num   = ct_mod( 'hero_stat3_number', '40%' );
$stat3_lbl   = ct_mod( 'hero_stat3_label',  'faster time to market' );

$form_title  = ct_mod( 'hero_form_title', 'Book a Free 30-Minute Call' );
?>

<section class="hero-section" id="hero">
    <div class="container">
        <div class="hero-inner">

            <!-- ── Left: Content ── -->
            <div class="hero-content">

                <!-- Logo -->
                <div class="hero-logo">
                    <div class="hero-logo-icon" aria-hidden="true">
                        <?php echo clariontech_logo_svg(); ?>
                    </div>
                    <div class="hero-logo-text">
                        <span class="line1">CLARION</span>
                        <span class="line2">TECHNOLOGIES</span>
                    </div>
                </div>

                <!-- Headline -->
                <h1 class="hero-headline">
                    <?php echo esc_html( $headline1 ); ?><br>
                    <span class="highlight"><?php echo esc_html( $headline2 ); ?></span>
                </h1>

                <div class="hero-divider" aria-hidden="true"></div>

                <p class="hero-description"><?php echo esc_html( $description ); ?></p>

                <!-- Stats -->
                <div class="hero-stats" aria-label="<?php esc_attr_e( 'Key statistics', 'clariontech' ); ?>">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo esc_html( $stat1_num ); ?></span>
                        <span class="stat-label"><?php echo esc_html( $stat1_lbl ); ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><?php echo esc_html( $stat2_num ); ?></span>
                        <span class="stat-label"><?php echo esc_html( $stat2_lbl ); ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><?php echo esc_html( $stat3_num ); ?></span>
                        <span class="stat-label"><?php echo esc_html( $stat3_lbl ); ?></span>
                    </div>
                </div>

                <!-- Trust Badges -->
                <div class="hero-badges" aria-label="<?php esc_attr_e( 'Awards and reviews', 'clariontech' ); ?>">
                    <!-- Clutch -->
                    <div class="badge-item badge-clutch">
                        <span class="badge-name">Clutch</span>
                        <span class="badge-rating">
                            ★★★★★ <span style="color:#333;font-weight:400;margin-left:3px;">4.9/5.0</span>
                        </span>
                    </div>

                    <!-- G2 -->
                    <div class="badge-item badge-g2">
                        <span class="badge-stars">★★★★★</span>
                        <span class="badge-sub"><?php esc_html_e( 'Read our reviews on', 'clariontech' ); ?></span>
                        <span class="badge-platform">
                            <svg width="16" height="16" viewBox="0 0 32 32" fill="white" aria-hidden="true"><path d="M16 2C8.28 2 2 8.28 2 16s6.28 14 14 14 14-6.28 14-14S23.72 2 16 2zm0 4a10 10 0 0 1 8.06 15.93L10.07 7.94A9.97 9.97 0 0 1 16 6zm0 20a10 10 0 0 1-8.06-15.93l13.99 14.06A9.97 9.97 0 0 1 16 26z"/></svg>
                            G2
                        </span>
                    </div>

                    <!-- GoodFirms -->
                    <div class="badge-item badge-goodfirms">
                        <span class="gf-top">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="#FFD700" aria-hidden="true"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <?php esc_html_e( 'Top Rated', 'clariontech' ); ?>
                        </span>
                        <span class="gf-name">GoodFirms</span>
                    </div>
                </div>
            </div><!-- /.hero-content -->

            <!-- ── Right: Form Card ── -->
            <div class="hero-form-card">
                <h2 class="form-card-title"><?php echo esc_html( $form_title ); ?></h2>

                <form class="contact-form" id="hero-contact-form" novalidate>
                    <?php wp_nonce_field( 'clariontech_nonce', 'ct_nonce' ); ?>

                    <div class="form-group">
                        <label for="ct-name">
                            <?php esc_html_e( 'Name', 'clariontech' ); ?>
                            <span class="required" aria-hidden="true">*</span>
                        </label>
                        <input type="text" id="ct-name" name="ct_name"
                               placeholder="<?php esc_attr_e( 'Jack Sullivan', 'clariontech' ); ?>"
                               required autocomplete="name">
                    </div>

                    <div class="form-group">
                        <label for="ct-email">
                            <?php esc_html_e( 'Business email', 'clariontech' ); ?>
                            <span class="required" aria-hidden="true">*</span>
                        </label>
                        <input type="email" id="ct-email" name="ct_email"
                               placeholder="<?php esc_attr_e( 'jack.s@email.com', 'clariontech' ); ?>"
                               required autocomplete="email">
                    </div>

                    <div class="form-group">
                        <label for="ct-phone"><?php esc_html_e( 'Phone Number', 'clariontech' ); ?></label>
                        <div class="phone-field-wrap">
                            <span class="phone-country-code">+91</span>
                            <input type="tel" id="ct-phone" name="ct_phone"
                                   placeholder="<?php esc_attr_e( '6399738967', 'clariontech' ); ?>"
                                   autocomplete="tel">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ct-message"><?php esc_html_e( 'How Can We Help?', 'clariontech' ); ?></label>
                        <textarea id="ct-message" name="ct_message"
                                  placeholder="<?php esc_attr_e( 'Tell us about your project...', 'clariontech' ); ?>"></textarea>
                    </div>

                    <div class="form-response" role="alert" aria-live="polite" style="display:none;"></div>

                    <button type="submit" class="btn-submit">
                        <?php esc_html_e( 'Schedule a Free Consultation', 'clariontech' ); ?>
                    </button>
                </form>
            </div><!-- /.hero-form-card -->

        </div><!-- /.hero-inner -->
    </div><!-- /.container -->
</section>
