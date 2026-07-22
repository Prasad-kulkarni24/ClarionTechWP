<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>

<main id="main-content" role="main">
<section class="ccp-section">
    <div class="container">
        <div class="ccp-inner">

            <div class="ccp-intro">
                <h1 class="ccp-heading">Get in <span class="ccp-heading-highlight">Touch</span></h1>
                <p class="ccp-subtext">Tell us about your project and we'll get back to you within one business day.</p>
            </div>

            <div class="ccp-card">
                <div id="ccp-msg" class="ccp-feedback" aria-live="polite" hidden></div>

                <form id="ccp-form" class="ccp-form" novalidate>
                    <?php wp_nonce_field( 'clariontech_nonce', 'nonce' ); ?>

                    <div class="ccp-row">
                        <div class="ccp-field">
                            <label class="ccp-label" for="ccp-name">Name <span aria-hidden="true">*</span></label>
                            <input class="ccp-input" type="text" id="ccp-name" name="ct_name" placeholder="Your full name" required autocomplete="name">
                        </div>
                        <div class="ccp-field">
                            <label class="ccp-label" for="ccp-org">Organisation Name</label>
                            <input class="ccp-input" type="text" id="ccp-org" name="ct_org" placeholder="Your company" autocomplete="organization">
                        </div>
                    </div>

                    <div class="ccp-row">
                        <div class="ccp-field">
                            <label class="ccp-label" for="ccp-email">Email <span aria-hidden="true">*</span></label>
                            <input class="ccp-input" type="email" id="ccp-email" name="ct_email" placeholder="you@company.com" required autocomplete="email">
                        </div>
                        <div class="ccp-field">
                            <label class="ccp-label" for="ccp-phone">Phone Number</label>
                            <input class="ccp-input" type="tel" id="ccp-phone" name="ct_phone" placeholder="+1 (555) 000-0000" autocomplete="tel">
                        </div>
                    </div>

                    <div class="ccp-field">
                        <label class="ccp-label" for="ccp-message">Additional Details</label>
                        <textarea class="ccp-input ccp-textarea" id="ccp-message" name="ct_message" rows="5" placeholder="Tell us about your project or requirements…"></textarea>
                    </div>

                    <button type="submit" class="ccp-submit">Send Message</button>
                </form>
            </div>

        </div>
    </div>
</section>
</main>

<script>
(function () {
    var form = document.getElementById('ccp-form');
    var msg  = document.getElementById('ccp-msg');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        var btn = form.querySelector('.ccp-submit');
        btn.disabled = true;
        btn.textContent = 'Sending…';

        var data = new FormData(form);
        data.append('action', 'clariontech_contact');

        fetch(ClarionTech.ajaxUrl, { method: 'POST', body: data })
            .then(function (r) { return r.json(); })
            .then(function (res) {
                msg.hidden = false;
                if (res.success) {
                    msg.className = 'ccp-feedback ccp-feedback--success';
                    msg.textContent = res.data.message;
                    form.reset();
                    btn.textContent = 'Sent!';
                } else {
                    msg.className = 'ccp-feedback ccp-feedback--error';
                    msg.textContent = res.data.message;
                    btn.disabled = false;
                    btn.textContent = 'Send Message';
                }
            })
            .catch(function () {
                msg.hidden = false;
                msg.className = 'ccp-feedback ccp-feedback--error';
                msg.textContent = 'Something went wrong. Please try again.';
                btn.disabled = false;
                btn.textContent = 'Send Message';
            });
    });
}());
</script>

<?php get_footer(); ?>
