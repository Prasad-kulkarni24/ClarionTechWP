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

    // ── Industries tab switching ──────────────────────────────────
    const tabBtns  = document.querySelectorAll( '.ind-tab-btn' );
    const tabPanels = document.querySelectorAll( '.ind-panel' );

    tabBtns.forEach( function ( btn ) {
        btn.addEventListener( 'click', function () {
            const target = this.dataset.tab;

            tabBtns.forEach( function ( b ) {
                b.classList.remove( 'is-active' );
                b.setAttribute( 'aria-selected', 'false' );
            } );
            tabPanels.forEach( function ( p ) {
                p.classList.remove( 'is-active' );
                p.setAttribute( 'aria-hidden', 'true' );
            } );

            this.classList.add( 'is-active' );
            this.setAttribute( 'aria-selected', 'true' );

            const panel = document.getElementById( 'ind-panel-' + target );
            if ( panel ) {
                panel.classList.add( 'is-active' );
                panel.setAttribute( 'aria-hidden', 'false' );
            }
        } );
    } );

    // ── Services cards scroll progress ───────────────────────────
    const cards   = document.getElementById( 'services-cards' );
    const progBar = document.getElementById( 'services-progress-bar' );

    if ( cards && progBar ) {
        const updateProgress = function () {
            const max = cards.scrollWidth - cards.clientWidth;
            const pct = max > 0 ? ( cards.scrollLeft / max ) * 100 : 0;
            const barWidth = cards.clientWidth / cards.scrollWidth * 100;
            progBar.style.width = barWidth + ( pct / 100 ) * ( 100 - barWidth ) + '%';
        };

        cards.addEventListener( 'scroll', updateProgress, { passive: true } );
        updateProgress();

        // Drag-to-scroll
        let isDown = false, startX, scrollStart;
        cards.addEventListener( 'mousedown', function ( e ) {
            isDown    = true;
            startX    = e.pageX - cards.offsetLeft;
            scrollStart = cards.scrollLeft;
        } );
        document.addEventListener( 'mouseup',   function () { isDown = false; } );
        document.addEventListener( 'mousemove', function ( e ) {
            if ( ! isDown ) return;
            e.preventDefault();
            cards.scrollLeft = scrollStart - ( e.pageX - cards.offsetLeft - startX );
        } );
    }

    // ── Case Studies scroll progress ─────────────────────────────
    const csTrack   = document.getElementById( 'cs-cards' );
    const csProgBar = document.getElementById( 'cs-progress-bar' );

    if ( csTrack && csProgBar ) {
        const updateCsProgress = function () {
            const max = csTrack.scrollWidth - csTrack.clientWidth;
            const pct = max > 0 ? ( csTrack.scrollLeft / max ) * 100 : 0;
            const barWidth = csTrack.clientWidth / csTrack.scrollWidth * 100;
            csProgBar.style.width = barWidth + ( pct / 100 ) * ( 100 - barWidth ) + '%';
        };

        csTrack.addEventListener( 'scroll', updateCsProgress, { passive: true } );
        updateCsProgress();

        // Drag-to-scroll
        let csDragging = false, csStartX, csScrollStart;
        csTrack.addEventListener( 'mousedown', function ( e ) {
            csDragging  = true;
            csStartX    = e.pageX - csTrack.offsetLeft;
            csScrollStart = csTrack.scrollLeft;
        } );
        document.addEventListener( 'mouseup',   function () { csDragging = false; } );
        document.addEventListener( 'mousemove', function ( e ) {
            if ( ! csDragging ) return;
            e.preventDefault();
            csTrack.scrollLeft = csScrollStart - ( e.pageX - csTrack.offsetLeft - csStartX );
        } );
    }

} )();
