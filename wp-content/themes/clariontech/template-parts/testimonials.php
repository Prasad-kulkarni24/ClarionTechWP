<?php
/**
 * Testimonials Section — 6th fold
 */
?>
<section class="testimonials-section" id="testimonials" aria-labelledby="tm-heading">
    <div class="container">

        <div class="tm-header">
            <div class="tm-header-text">
                <h2 class="tm-heading" id="tm-heading">
                    Trusted by companies that demand<br>
                    <span class="text-orange">engineering excellence</span>
                </h2>
            </div>
            <div class="tm-nav" aria-label="Testimonial navigation">
                <button class="tm-nav-btn tm-prev" aria-label="Previous testimonials">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <button class="tm-nav-btn tm-next" aria-label="Next testimonials">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </div>

        <div class="tm-track-wrap">
            <div class="tm-track" id="tm-track">

                <!-- Slide 1: two cards -->
                <div class="tm-slide">
                    <blockquote class="tm-card">
                        <span class="tm-quote-mark" aria-hidden="true">&ldquo;</span>
                        <div class="tm-card-body">
                            <div class="tm-photo-wrap">
                                <img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/testimonial-kris-merchant.jpg' ); ?>"
                                    alt="Kris Merchant"
                                    class="tm-photo"
                                    loading="lazy"
                                />
                            </div>
                            <div class="tm-content">
                                <p class="tm-text">
                                    Clarion gave us the expertise we lacked in-house and delivered consistently, helping us address critical challenges and seize new opportunities. They are part of our core team now.
                                </p>
                                <footer class="tm-author">
                                    <p class="tm-author-name">Kris Merchant</p>
                                    <p class="tm-author-role">Director of Products, Health Workforce New York</p>
                                </footer>
                            </div>
                        </div>
                    </blockquote>

                    <blockquote class="tm-card">
                        <span class="tm-quote-mark" aria-hidden="true">&ldquo;</span>
                        <div class="tm-card-body">
                            <div class="tm-photo-wrap">
                                <img
                                    src="<?php echo esc_url( get_template_directory_uri() . '/testimonial-peter-sayer.jpg' ); ?>"
                                    alt="Peter Sayer"
                                    class="tm-photo"
                                    loading="lazy"
                                />
                            </div>
                            <div class="tm-content">
                                <p class="tm-text">
                                    About four years ago, we started with one developer from Clarion, and now we have six. It's not traditional outsourcing. These developers are integrated, take ownership, and work with our North American team seamlessly.
                                </p>
                                <footer class="tm-author">
                                    <p class="tm-author-name">Peter Sayer</p>
                                    <p class="tm-author-role">Founder &amp; CEO, Flexpath Capital</p>
                                </footer>
                            </div>
                        </div>
                    </blockquote>
                </div><!-- /.tm-slide -->

                <!-- Slide 2: placeholder for future testimonials -->
                <div class="tm-slide">
                    <blockquote class="tm-card tm-card--placeholder">
                        <span class="tm-quote-mark" aria-hidden="true">&ldquo;</span>
                        <div class="tm-card-body">
                            <div class="tm-photo-wrap tm-photo-placeholder"></div>
                            <div class="tm-content">
                                <p class="tm-text">
                                    Placeholder testimonial. Replace with real client quote when available.
                                </p>
                                <footer class="tm-author">
                                    <p class="tm-author-name">Client Name</p>
                                    <p class="tm-author-role">Title, Company</p>
                                </footer>
                            </div>
                        </div>
                    </blockquote>

                    <blockquote class="tm-card tm-card--placeholder">
                        <span class="tm-quote-mark" aria-hidden="true">&ldquo;</span>
                        <div class="tm-card-body">
                            <div class="tm-photo-wrap tm-photo-placeholder"></div>
                            <div class="tm-content">
                                <p class="tm-text">
                                    Placeholder testimonial. Replace with real client quote when available.
                                </p>
                                <footer class="tm-author">
                                    <p class="tm-author-name">Client Name</p>
                                    <p class="tm-author-role">Title, Company</p>
                                </footer>
                            </div>
                        </div>
                    </blockquote>
                </div><!-- /.tm-slide -->

            </div><!-- /.tm-track -->
        </div><!-- /.tm-track-wrap -->

    </div><!-- /.container -->
</section>
