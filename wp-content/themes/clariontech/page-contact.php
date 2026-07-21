<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>

<main id="main-content" role="main">
<section class="contact-page-section">
    <div class="container">
        <div class="contact-page-inner">

            <!-- Left: Info -->
            <div class="contact-info-col">
                <h1 class="contact-info-heading">Let's Build Something<br><span class="contact-info-highlight">That Actually Works</span></h1>
                <p class="contact-info-body">Whether you're evaluating Python AI development partners, need to scale an existing team, or want to explore what automation could do for your workflows — we're here to listen first.</p>

                <ul class="contact-detail-list">
                    <li class="contact-detail-item">
                        <span class="contact-detail-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 6.667C2.5 5.747 3.247 5 4.167 5h11.666C16.753 5 17.5 5.747 17.5 6.667v8.333c0 .92-.747 1.667-1.667 1.667H4.167C3.247 16.667 2.5 15.92 2.5 15V6.667z" stroke="#E8490F" stroke-width="1.5"/>
                                <path d="M2.5 7.5l7.5 5 7.5-5" stroke="#E8490F" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <span>contact@clariontech.com</span>
                    </li>
                    <li class="contact-detail-item">
                        <span class="contact-detail-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1.667A5.833 5.833 0 0 0 4.167 7.5c0 4.375 5.833 10.833 5.833 10.833S15.833 11.875 15.833 7.5A5.833 5.833 0 0 0 10 1.667z" stroke="#E8490F" stroke-width="1.5"/>
                                <circle cx="10" cy="7.5" r="2" stroke="#E8490F" stroke-width="1.5"/>
                            </svg>
                        </span>
                        <span>Pune, India &nbsp;|&nbsp; New York, USA</span>
                    </li>
                </ul>

                <div class="contact-trust-badges">
                    <div class="contact-badge">
                        <span class="contact-badge-number">98%</span>
                        <span class="contact-badge-label">project success rate</span>
                    </div>
                    <div class="contact-badge">
                        <span class="contact-badge-number">1,500+</span>
                        <span class="contact-badge-label">global deployments</span>
                    </div>
                    <div class="contact-badge">
                        <span class="contact-badge-number">25 yrs</span>
                        <span class="contact-badge-label">of delivery excellence</span>
                    </div>
                </div>
            </div>

            <!-- Right: Form -->
            <div class="contact-form-col">
                <div class="contact-form-card">
                    <h2 class="contact-form-title">Share your Details</h2>

                    <div id="contact-form-msg" class="contact-form-feedback" aria-live="polite" hidden></div>

                    <form id="contact-page-form" class="contact-page-form" novalidate>
                        <?php wp_nonce_field( 'clariontech_nonce', 'nonce' ); ?>

                        <div class="cpf-field">
                            <label class="cpf-label" for="cpf-name">Name <span aria-hidden="true">*</span></label>
                            <input class="cpf-input" type="text" id="cpf-name" name="ct_name" placeholder="Your full name" required autocomplete="name">
                        </div>

                        <div class="cpf-field">
                            <label class="cpf-label" for="cpf-email">Email <span aria-hidden="true">*</span></label>
                            <input class="cpf-input" type="email" id="cpf-email" name="ct_email" placeholder="you@company.com" required autocomplete="email">
                        </div>

                        <div class="cpf-field">
                            <label class="cpf-label" for="cpf-phone">Phone Number</label>
                            <input class="cpf-input" type="tel" id="cpf-phone" name="ct_phone" placeholder="+1 (555) 000-0000" autocomplete="tel">
                        </div>

                        <div class="cpf-field">
                            <label class="cpf-label" for="cpf-message">Tell us a bit about your requirements.</label>
                            <textarea class="cpf-input cpf-textarea" id="cpf-message" name="ct_message" rows="5" placeholder="Describe your project or what you're looking to achieve…"></textarea>
                        </div>

                        <button type="submit" class="cpf-submit">Get Started</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
</main>

<script>
(function () {
    var form = document.getElementById('contact-page-form');
    var msg  = document.getElementById('contact-form-msg');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var btn = form.querySelector('.cpf-submit');
        btn.disabled = true;
        btn.textContent = 'Sending…';

        var data = new FormData(form);
        data.append('action', 'clariontech_contact');

        fetch(ClarionTech.ajaxUrl, { method: 'POST', body: data })
            .then(function (r) { return r.json(); })
            .then(function (res) {
                msg.hidden = false;
                if (res.success) {
                    msg.className = 'contact-form-feedback contact-form-feedback--success';
                    msg.textContent = res.data.message;
                    form.reset();
                    btn.textContent = 'Sent!';
                } else {
                    msg.className = 'contact-form-feedback contact-form-feedback--error';
                    msg.textContent = res.data.message;
                    btn.disabled = false;
                    btn.textContent = 'Get Started';
                }
            })
            .catch(function () {
                msg.hidden = false;
                msg.className = 'contact-form-feedback contact-form-feedback--error';
                msg.textContent = 'Something went wrong. Please try again.';
                btn.disabled = false;
                btn.textContent = 'Get Started';
            });
    });
}());
</script>

<?php get_footer(); ?>
