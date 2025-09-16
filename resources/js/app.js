import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');

    // **AJOUTEZ CE BLOC DE CODE**
    // Cette fonction ajuste la hauteur du menu mobile sur iOS
    const adjustMobileNavHeight = () => {
        if (mobileNav) {
            mobileNav.style.height = `${window.innerHeight}px`;
        }
    };

    // Appliquez la hauteur au chargement et lors du redimensionnement
    adjustMobileNavHeight();
    window.addEventListener('resize', adjustMobileNavHeight);


    if (menuToggle && mobileNav) {
        menuToggle.addEventListener('click', () => {
            mobileNav.classList.toggle('open');
            menuToggle.classList.toggle('open');
            // Optionnel: Empêche le scroll du body quand le menu est ouvert
            document.body.classList.toggle('no-scroll');
        });
    }

    // Ferme le menu si la fenêtre est redimensionnée (pour le desktop)
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768 && mobileNav.classList.contains('open')) {
            mobileNav.classList.remove('open');
            menuToggle.classList.remove('open');
            document.body.classList.remove('no-scroll');
        }
    });
});
