import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');

    if (menuToggle && mobileNav) {
        menuToggle.addEventListener('click', () => {
            mobileNav.classList.toggle('open');
            menuToggle.classList.toggle('open');
            document.body.classList.toggle('no-scroll');
        });
    }

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768 && mobileNav.classList.contains('open')) {
            mobileNav.classList.remove('open');
            menuToggle.classList.remove('open');
            document.body.classList.remove('no-scroll');
        }
    });

    document.addEventListener('click', (event) => {
        const isClickInsideMenu = mobileNav.contains(event.target);
        const isClickOnToggle = menuToggle.contains(event.target);

        // Si le menu est ouvert et que le clic est en dehors du menu ET du bouton
        if (mobileNav.classList.contains('open') && !isClickInsideMenu && !isClickOnToggle) {
            mobileNav.classList.remove('open');
            menuToggle.classList.remove('open');
        }
    });

    const flashMessage = document.getElementById('flash-message');

    if (flashMessage) {
        // Rendre le message visible
        setTimeout(() => {
            flashMessage.classList.add('visible');
        }, 100); // Court délai pour permettre la transition

        // Faire disparaître le message après 3 secondes
        setTimeout(() => {
            flashMessage.classList.remove('visible');
        }, 3000); // Ajustez la durée ici (en millisecondes)
    }
});
