( function () {
    'use strict';

    // ── Mobile menu toggle ────────────────────────────────────
    const toggle  = document.querySelector( '.mobile-menu-toggle' );
    const mobileNav = document.getElementById( 'mobile-nav' );

    if ( toggle && mobileNav ) {
        toggle.addEventListener( 'click', function () {
            const expanded = this.getAttribute( 'aria-expanded' ) === 'true';
            this.setAttribute( 'aria-expanded', String( ! expanded ) );
            mobileNav.setAttribute( 'aria-hidden', String( expanded ) );
            mobileNav.classList.toggle( 'is-open' );
        } );
    }

    // ── Hero contact form AJAX ────────────────────────────────
    const form = document.getElementById( 'hero-contact-form' );

    if ( form ) {
        form.addEventListener( 'submit', function ( e ) {
            e.preventDefault();

            const btn      = form.querySelector( '.btn-submit' );
            const response = form.querySelector( '.form-response' );
            const data     = new FormData( form );

            data.append( 'action', 'clariontech_contact' );
            data.append( 'nonce',  document.querySelector( '#ct_nonce' )?.value || '' );

            btn.disabled    = true;
            btn.textContent = 'Sending…';

            fetch( ClarionTech.ajaxUrl, { method: 'POST', body: data } )
                .then( r => r.json() )
                .then( res => {
                    response.style.display     = 'block';
                    response.style.padding     = '10px 0';
                    response.style.fontSize    = '13px';
                    response.style.fontWeight  = '600';

                    if ( res.success ) {
                        response.style.color = '#1a7a4a';
                        response.textContent = res.data.message;
                        form.reset();
                    } else {
                        response.style.color = '#c0392b';
                        response.textContent = res.data.message;
                    }
                } )
                .catch( () => {
                    response.style.display = 'block';
                    response.style.color   = '#c0392b';
                    response.textContent   = 'Network error. Please try again.';
                } )
                .finally( () => {
                    btn.disabled    = false;
                    btn.textContent = 'Schedule a Free Consultation';
                } );
        } );
    }

} )();
