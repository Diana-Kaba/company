(function () {
    'use strict';

    // Switching to mobile: https://developer.mozilla.org/en-US/docs/Web/API/MediaQueryList/onchange
    const isMobile = window.matchMedia(
        '(max-width: ' + getComputedStyle(document.body).getPropertyValue('--custom--media-max-width--lg') + ')'
    );
    const navigationResponsiveContainer = document.querySelector(
        '.site-header .wp-block-navigation__responsive-container'
    );
    isMobile.onchange = (e) => {
        if (e.matches) {
            // <= Mobile
        } else {
            // > Mobile
            // Autoclose header nav container if modal is open and browser window gets resized.
            if (
                document.body.contains(navigationResponsiveContainer) &&
                navigationResponsiveContainer.classList.contains('is-menu-open')
            ) {
                document.querySelector('.site-header .wp-block-navigation__responsive-container-close').click();
            }
        }
    };

    const throttle = (func, delay) => {
        let throttleTimer;
        return function () {
            const context = this;
            const args = arguments;
            clearTimeout(throttleTimer);
            throttleTimer = setTimeout(() => func.apply(context, args), delay);
        };
    };

    document.addEventListener('DOMContentLoaded', function () {
        const scrollUp = document.getElementById('back-to-top');
        if (scrollUp) {
            const scrollHandler = throttle(function () {
                const scrollPosition = window.scrollY || document.body.scrollTop;
                if (scrollPosition > 300) {
                    scrollUp.classList.add('is-visible');
                } else {
                    scrollUp.classList.remove('is-visible');
                }
            }, 250);
            window.addEventListener('scroll', scrollHandler);
            scrollUp.addEventListener('click', e => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    });

    // Style password protected post form.
    const passwordButton = document.querySelector('.post-password-form [type="submit"]');
    if (document.body.contains(passwordButton)) {
        const passwordButtonWrapper = document.createElement('div');
        passwordButtonWrapper.classList.add('wp-block-button');
        passwordButton.parentNode.insertBefore(passwordButtonWrapper, passwordButton);
        passwordButtonWrapper.appendChild(passwordButton);

        passwordButton.classList.add('wp-block-button__link');
    }

    var trevorShowcases = document.querySelectorAll(".trevor-marquee-showcase");
    trevorShowcases.forEach(function (trevorShowcase) {
        var trevorMarquee = trevorShowcase.querySelector(".trevor-marquee");
        if (trevorMarquee) {
            var trevorCloneMarquee = trevorMarquee.cloneNode(true);
            trevorShowcase.appendChild(trevorCloneMarquee);
        }
    });

})();
