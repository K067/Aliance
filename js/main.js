const navbar = document.querySelector('.navbar');
const headerLogo = navbar.querySelector('.navbar-logo');
const headerNav = navbar.querySelector('.header-nav');
const logoDark = navbar.querySelector('.logo-light');
const phoneLink = navbar.querySelector('.header-phone');

document.addEventListener('scroll', () => {
    let current = window.scrollY;

    if (current >= 150) {
        navbar.style.backgroundColor = 'white';
        headerLogo.style.display = 'flex';
        headerLogo.style.alignItems = 'center';
        navbar.style.height = '4.5rem';
        headerNav.style.color = '#292D33';
        logoDark.src = './img/logo-dark.svg';
        phoneLink.style.color = '#292D33';
    } else {
        navbar.style.backgroundColor = '';
        navbar.style.height = '';
        headerLogo.style.display = '';
        headerLogo.style.alignItems = '';
        headerNav.style.color = '';
        logoDark.src = './img/logo-light.svg';
        phoneLink.style.color = '';
    }
});
