<?php
/**
 * Industries Section Template Part
 */

$img = get_template_directory_uri();

$industries = [
    [
        'id'    => 'finance',
        'tab'   => 'Finance &amp; Insurance',
        'image' => $img . '/industry-finance.jpg',
        'title' => 'Finance &amp; Insurance',
        'desc'  => 'Our teams have built and deployed Python AI workflows across the finance and insurance industries, driving an uptick in cost management metrics and risk compliance while driving customer experience meaningfully.',
        'uses'  => [
            'Automated financial analysis',
            'Faster payment processing',
            'Smart data-driven budgeting',
            'Automated claims management',
            'Accelerated document processing',
            'Error-free insurance service',
        ],
    ],
    [
        'id'    => 'manufacturing',
        'tab'   => 'Manufacturing',
        'image' => $img . '/industry-manufacturing.jpg',
        'title' => 'Manufacturing',
        'desc'  => 'We power smart factory initiatives with Python AI, connecting shop-floor data to decision-making systems that reduce downtime, improve yield, and cut operational costs across your production lines.',
        'uses'  => [
            'Predictive maintenance',
            'Quality control automation',
            'Supply chain optimisation',
            'Real-time production monitoring',
            'Defect detection with computer vision',
            'Energy consumption optimisation',
        ],
    ],
    [
        'id'    => 'healthcare',
        'tab'   => 'Healthcare',
        'image' => $img . '/industry-healthcare.jpg',
        'title' => 'Healthcare',
        'desc'  => 'Our Python AI solutions help healthcare organisations digitise clinical workflows, reduce administrative overhead, and surface insights that improve patient outcomes at scale.',
        'uses'  => [
            'Patient data analysis',
            'Clinical workflow automation',
            'Medical imaging AI',
            'Appointment scheduling optimisation',
            'Compliance and audit automation',
            'Remote patient monitoring',
        ],
    ],
    [
        'id'    => 'pharma',
        'tab'   => 'Pharma',
        'image' => $img . '/industry-pharma.jpg',
        'title' => 'Pharma',
        'desc'  => 'From drug discovery to regulatory submission, we build Python AI systems that compress timelines, improve accuracy, and ensure compliance across every stage of the pharmaceutical pipeline.',
        'uses'  => [
            'Drug discovery acceleration',
            'Clinical trial data analysis',
            'Regulatory document automation',
            'Adverse event detection',
            'Supply chain traceability',
            'Lab data management',
        ],
    ],
];
?>

<section class="industries-section" id="industries">
    <div class="container">

        <div class="industries-header">
            <h2 class="industries-headline">
                Industry expertise that drives <span class="highlight">business transformation</span>
            </h2>
            <p class="industries-desc">Our Python AI teams have deployed production systems into financial platforms, clinical environments, factory floors, and pharma operations. Whatever your industry demands, we&rsquo;ve already delivered inside it.</p>
        </div>

        <div class="industries-tabs-wrap">

            <!-- Tab nav -->
            <div class="industries-tab-nav" role="tablist">
                <?php foreach ( $industries as $i => $ind ) : ?>
                <button
                    class="ind-tab-btn<?php echo $i === 0 ? ' is-active' : ''; ?>"
                    role="tab"
                    aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                    aria-controls="ind-panel-<?php echo esc_attr( $ind['id'] ); ?>"
                    data-tab="<?php echo esc_attr( $ind['id'] ); ?>"
                >
                    <?php echo $ind['tab']; ?>
                </button>
                <?php endforeach; ?>
            </div>

            <!-- Tab panels -->
            <?php foreach ( $industries as $i => $ind ) : ?>
            <div
                class="ind-panel<?php echo $i === 0 ? ' is-active' : ''; ?>"
                id="ind-panel-<?php echo esc_attr( $ind['id'] ); ?>"
                role="tabpanel"
                aria-hidden="<?php echo $i === 0 ? 'false' : 'true'; ?>"
            >
                <div class="ind-panel-inner">
                    <div class="ind-image-wrap">
                        <img
                            src="<?php echo esc_url( $ind['image'] ); ?>"
                            alt="<?php echo esc_attr( strip_tags( $ind['title'] ) ); ?>"
                            class="ind-image"
                            loading="lazy"
                        />
                    </div>
                    <div class="ind-content">
                        <h3 class="ind-title"><?php echo $ind['title']; ?></h3>
                        <p class="ind-desc"><?php echo esc_html( $ind['desc'] ); ?></p>
                        <p class="ind-uses-label">USE CASES FOR</p>
                        <ul class="ind-uses-list">
                            <?php foreach ( $ind['uses'] as $use ) : ?>
                            <li><?php echo esc_html( $use ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
