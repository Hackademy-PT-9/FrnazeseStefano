window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink');
        } else {
            navbarCollapsible.classList.add('navbar-shrink');
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Use vanilla JavaScript to activate scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        mainNav.querySelectorAll('.nav-link').forEach(function (navLink) {
            navLink.addEventListener('click', () => {
                if (window.innerWidth < 992) { // Collapse the navbar only on smaller screens
                    const navbarToggler = document.body.querySelector('.navbar-toggler');
                    if (navbarToggler && window.getComputedStyle(navbarToggler).display !== 'none') {
                        navbarToggler.click();
                    }
                }
            });
        });
    }

});
