<?php
/**
 * Case Studies Section — 4th fold
 */
?>
<section class="case-studies-section" id="case-studies" aria-labelledby="cs-heading">
    <div class="container">

        <div class="cs-header">
            <h2 class="cs-heading" id="cs-heading">
                Case Studies: <span class="text-orange">Python in action</span>
            </h2>
            <p class="cs-description">
                Production deployments across regulated industries, each scoped to a measurable business outcome, delivered against it, and still running in a live environment today.
            </p>
        </div>

        <div class="cs-track-wrap">
            <div class="cs-track" id="cs-cards">

                <!-- Card 1 -->
                <article class="cs-card">
                    <div class="cs-card-content">
                        <h3 class="cs-card-title">AI-Powered Quoting Engine — U.S. Pharmacy Company</h3>
                        <p class="cs-card-desc">
                            A leading U.S. Long-Term Care (LTC) pharmacy company faced a critical bottleneck in their bid quoting process. Manual data entry, complex pricing rules, and dependency on key personnel created delays that cost the company large contracts.
                        </p>
                        <p class="cs-card-desc">
                            Clarion Technologies built an AI-powered quoting engine using Python, automating the entire end-to-end workflow from RFP intake to quote generation, pricing validation, and PDF output.
                        </p>
                        <ul class="cs-results">
                            <li>
                                <span class="cs-result-metric">90%</span>
                                <span class="cs-result-label">improvement in quoting accuracy and consistency</span>
                            </li>
                            <li>
                                <span class="cs-result-metric">5 Days → 20 Minutes</span>
                                <span class="cs-result-label">reduction in quote generation time</span>
                            </li>
                            <li>
                                <span class="cs-result-metric">Zero</span>
                                <span class="cs-result-label">key-person dependencies in quoting workflow</span>
                            </li>
                            <li>
                                <span class="cs-result-metric">Large deal closures</span>
                                <span class="cs-result-label">enabled by faster, accurate bid responses</span>
                            </li>
                        </ul>
                        <a href="#" class="cs-cta-btn">DOWNLOAD CASESTUDY &#8599;</a>
                    </div>
                    <div class="cs-card-image-wrap">
                        <img
                            src="<?php echo esc_url( get_template_directory_uri() . '/casestudy-pharmacy.png' ); ?>"
                            alt="Scientists working in a pharmacy lab"
                            class="cs-card-image"
                            loading="lazy"
                        />
                    </div>
                </article>

                <!-- Card 2 (placeholder) -->
                <article class="cs-card">
                    <div class="cs-card-content">
                        <h3 class="cs-card-title">Intelligent Document Processing — Global Insurance Group</h3>
                        <p class="cs-card-desc">
                            A major insurance group processing thousands of claims documents daily struggled with manual extraction, classification errors, and slow turnaround times that impacted customer satisfaction scores.
                        </p>
                        <p class="cs-card-desc">
                            Our Python-based intelligent document processing pipeline combined OCR, NLP classification, and rule-based validation to automate the entire claims intake workflow without replacing existing systems.
                        </p>
                        <ul class="cs-results">
                            <li>
                                <span class="cs-result-metric">85%</span>
                                <span class="cs-result-label">reduction in manual document handling</span>
                            </li>
                            <li>
                                <span class="cs-result-metric">3× Faster</span>
                                <span class="cs-result-label">claims processing turnaround</span>
                            </li>
                            <li>
                                <span class="cs-result-metric">99.2%</span>
                                <span class="cs-result-label">extraction accuracy on structured forms</span>
                            </li>
                            <li>
                                <span class="cs-result-metric">$2.4M</span>
                                <span class="cs-result-label">annual operational cost savings</span>
                            </li>
                        </ul>
                        <a href="#" class="cs-cta-btn">DOWNLOAD CASESTUDY &#8599;</a>
                    </div>
                    <div class="cs-card-image-wrap cs-card-image-placeholder">
                        <div class="cs-placeholder-img" aria-hidden="true"></div>
                    </div>
                </article>

            </div><!-- /.cs-track -->
        </div><!-- /.cs-track-wrap -->

        <div class="cs-progress-track" aria-hidden="true">
            <div class="cs-progress-bar" id="cs-progress-bar"></div>
        </div>

    </div><!-- /.container -->
</section>
