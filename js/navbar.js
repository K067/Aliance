const navbar = document.querySelector('.navbar');
const mobileMenu = document.querySelector('.mobile-menu');

const headerLogo = navbar.querySelector('.navbar-logo');
const headerNav = navbar.querySelector('.header-nav');
const logoDark = navbar.querySelector('.logo-light');
const phoneLink = navbar.querySelector('.header-phone');
const mobileMenuLine = navbar.querySelectorAll('.mobile-menu-line');
const mobileMenuToggle = navbar.querySelector('.mobile-menu-toggle');

mobileMenuLine[1].style.width = '80%';

mobileMenuToggle.addEventListener('click', (e) => {
    e.preventDefault();

    mobileMenu.classList.toggle('is-open');
    document.querySelector('body').classList.toggle('bye');

    if (document.querySelector('.is-open')) {
        navbar.style.backgroundColor = 'white';
        headerLogo.style.display = 'flex';
        headerLogo.style.alignItems = 'center';
        navbar.style.height = '4.5rem';
        headerNav.style.color = '#292D33';
        logoDark.src = './img/logo-dark.svg';

        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = '#333';
            e.style.position = 'relative';
            e.style.right = '-5px';
        });

        mobileMenuLine[0].style.transform = 'rotate(45deg) translateY(7px)';
        mobileMenuLine[2].style.transform = 'rotate(-45deg) translateY(-8px)';
        mobileMenuLine[1].style.display = 'none';
    } else {

        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = 'white';
            e.style.position = '';
            e.style.right = '';
        });

        navbar.style.backgroundColor = '';
        navbar.style.height = '';
        headerLogo.style.display = '';
        headerLogo.style.alignItems = '';
        headerNav.style.color = '';
        logoDark.src = './img/logo-light.svg';

        mobileMenuLine[0].style.transform = '';
        mobileMenuLine[2].style.transform = '';
        mobileMenuLine[1].style.display = 'block';
    }
});

document.addEventListener('scroll', () => {
    let current = window.scrollY;

    if (current >= 36) {
        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = '#333';
        });
        navbar.style.backgroundColor = 'white';
        headerLogo.style.display = 'flex';
        headerLogo.style.alignItems = 'center';
        navbar.style.height = '4.5rem';
        headerNav.style.color = '#292D33';
        logoDark.src = './img/logo-dark.svg';
        phoneLink.style.color = '#292D33';
    } else {
        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = 'white';
        });
        navbar.style.backgroundColor = '';
        navbar.style.height = '';
        headerLogo.style.display = '';
        headerLogo.style.alignItems = '';
        headerNav.style.color = '';
        logoDark.src = './img/logo-light.svg';
        phoneLink.style.color = '';
    }
});

const swiper = new Swiper('.swiper', {
    speed: 400,
    autoHeight: true,
    slidesPerView: 1,
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    breakpoints: {
        374: {
            slidesPerView: 1.5,
        },
        576: {
            slidesPerView: 2,
        },
        767: {
            slidesPerView: 3,
        },
        1199: {
            slidesPerView: 4,
        },
        1201: {
            slidesPerView: 5,
        }
    }
});
