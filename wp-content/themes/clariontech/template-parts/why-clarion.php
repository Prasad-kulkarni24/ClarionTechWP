<?php
/**
 * Why Companies Choose Clarion — 5th fold
 * Text is editable via Appearance → Customize → Why Clarion Section
 */

$wc_heading     = ct_mod( 'wc_heading',     'Why Companies Choose Clarion for Python AI' );
$wc_description = ct_mod( 'wc_description', "We've spent 25 years building mission-critical software for companies that cannot afford delivery failure. From a single embedded engineer to a full AI development squad, we bring the talent, the process, and the domain knowledge to deliver." );

$wc_card1_metric = ct_mod( 'wc_card1_metric', 'Top 1%' );
$wc_card1_title  = ct_mod( 'wc_card1_title',  'Python Developers' );
$wc_card1_body1  = ct_mod( 'wc_card1_body1',  'Every engineer on our team cleared a multi-stage evaluation, holds 6–12 years of experience, and is well acquainted with frameworks like Django, Vue, Flask, Falcon, Tornado, and more.' );
$wc_card1_body2  = ct_mod( 'wc_card1_body2',  "We build teams that understand FDA audits, or a HIPAA breach notification actually means for the system they're building." );

$wc_card2_metric = ct_mod( 'wc_card2_metric', '1,500+' );
$wc_card2_title  = ct_mod( 'wc_card2_title',  'Successful Global Projects' );
$wc_card2_body1  = ct_mod( 'wc_card2_body1',  'Our teams have delivered 1500+ projects encompassing mission-critical software across Healthcare, Finance, Manufacturing, and Pharma.' );
$wc_card2_body2  = ct_mod( 'wc_card2_body2',  "The 85% client renewal rate that comes with it isn't a marketing figure, it's the measurable outcome of 25 years of accountable engineering." );

$wc_card3_title = ct_mod( 'wc_card3_title', 'Onboarded in as Little as 48 Hours' );
$wc_card3_body1 = ct_mod( 'wc_card3_body1', 'Our pre-vetted, domain-matched Python engineers integrate with your tools, your sprint cycle, and your compliance requirements within 48 hours of a signed agreement.' );
$wc_card3_body2 = ct_mod( 'wc_card3_body2', 'Teams become productive from the first standup, not after an extended onboarding at your expense.' );

$wc_card4_title   = ct_mod( 'wc_card4_title',   'Scalability and Flexibility via the vEmployee™ Model' );
$wc_card4_body    = ct_mod( 'wc_card4_body',    'Our vEmployee™ model scales from one engineer to a full Python AI squad without disrupting your delivery timeline.' );
$wc_card4_bullet1 = ct_mod( 'wc_card4_bullet1', 'No lock-in, no penalties, no recruitment pipeline to manage.' );
$wc_card4_bullet2 = ct_mod( 'wc_card4_bullet2', 'Scale up in 2 weeks.' );
$wc_card4_bullet3 = ct_mod( 'wc_card4_bullet3', "Reduce with 30 days' notice." );
$wc_card4_bullet4 = ct_mod( 'wc_card4_bullet4', 'Your team, on your terms.' );
?>
<section class="why-clarion-section" id="why-clarion" aria-labelledby="wc-heading">
    <div class="container">

        <div class="wc-header">
            <h2 class="wc-heading" id="wc-heading">
                <?php echo esc_html( $wc_heading ); ?>
            </h2>
            <p class="wc-description">
                <?php echo esc_html( $wc_description ); ?>
            </p>
        </div>

        <div class="wc-grid">

            <!-- Card 1 -->
            <div class="wc-card wc-card--featured">
                <div class="wc-card-inner">
                    <p class="wc-card-metric"><?php echo esc_html( $wc_card1_metric ); ?></p>
                    <h3 class="wc-card-title"><?php echo esc_html( $wc_card1_title ); ?></h3>
                    <p class="wc-card-body"><?php echo esc_html( $wc_card1_body1 ); ?></p>
                    <p class="wc-card-body"><?php echo esc_html( $wc_card1_body2 ); ?></p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="wc-card">
                <div class="wc-card-inner">
                    <p class="wc-card-metric"><?php echo esc_html( $wc_card2_metric ); ?></p>
                    <h3 class="wc-card-title"><?php echo esc_html( $wc_card2_title ); ?></h3>
                    <p class="wc-card-body"><?php echo esc_html( $wc_card2_body1 ); ?></p>
                    <p class="wc-card-body"><?php echo esc_html( $wc_card2_body2 ); ?></p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="wc-card">
                <div class="wc-card-inner">
                    <h3 class="wc-card-title"><?php echo esc_html( $wc_card3_title ); ?></h3>
                    <p class="wc-card-body"><?php echo esc_html( $wc_card3_body1 ); ?></p>
                    <p class="wc-card-body"><?php echo esc_html( $wc_card3_body2 ); ?></p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="wc-card">
                <div class="wc-card-inner">
                    <h3 class="wc-card-title"><?php echo esc_html( $wc_card4_title ); ?></h3>
                    <p class="wc-card-body"><?php echo esc_html( $wc_card4_body ); ?></p>
                    <ul class="wc-bullet-list">
                        <li><?php echo esc_html( $wc_card4_bullet1 ); ?></li>
                        <li><?php echo esc_html( $wc_card4_bullet2 ); ?></li>
                        <li><?php echo esc_html( $wc_card4_bullet3 ); ?></li>
                        <li><?php echo esc_html( $wc_card4_bullet4 ); ?></li>
                    </ul>
                </div>
            </div>

        </div><!-- /.wc-grid -->

    </div><!-- /.container -->
</section>
