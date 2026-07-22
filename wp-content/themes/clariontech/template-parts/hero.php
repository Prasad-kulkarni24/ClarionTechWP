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
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/clo-logo-1.png' ); ?>" alt="Clarion Technologies" class="hero-logo-img">
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
                    <div class="badge-item badge-clutch">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/frame-171.png' ); ?>" alt="Clutch 4.9/5.0">
                    </div>
                    <div class="badge-item badge-g2">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/image-12.png' ); ?>" alt="G2 Reviews">
                    </div>
                    <div class="badge-item badge-goodfirms">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/bg.png' ); ?>" alt="GoodFirms">
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
