const navbar = document.querySelector('.navbar');
const mobileMenu = document.querySelector('.mobile-menu');
const trigger = document.querySelectorAll('.card-brand');

const headerNav = navbar.querySelector('.header-nav');
const logoDark = navbar.querySelector('.logo-light');
const phoneLink = navbar.querySelector('.header-phone');
const mobileMenuToggle = navbar.querySelector('.mobile-menu-toggle');
const mobileMenuLine = navbar.querySelectorAll('.mobile-menu-line');

let elementArray = [
    document.querySelectorAll('.header-nav-link'),
    document.querySelectorAll('.button-link'),
    document.querySelectorAll('.card'),
    document.querySelectorAll('.card-title'),
    document.querySelectorAll('.card-brand'),
    document.querySelectorAll('.card-title-brand'),
    document.querySelectorAll('.cliens-logo')
];

mobileMenuLine[1].style.width = '80%';

const changing = (e) => {
    e.forEach(el => {
        el.forEach(ele => {
            ele.style.pointerEvents = "none";
        })
    })
}

const hover = (elem) => {
    elem.forEach(e => {
        const first = elem[0].querySelector('.card-image-brand');
        const second = elem[1].querySelector('.card-image-brand');

        e.addEventListener('mouseover', () => {
            switch (e) {
                case elem[0]:
                    first.src = './img/AGTECH.png';
                    break;
                case elem[1]:
                    second.src = './img/AP.png';
                    break;
            }
        })
        e.addEventListener('mouseout', () => {
            switch (e) {
                case elem[0]:
                    first.src = './img/AGTECHA.png';
                    break;
                case elem[1]:
                    second.src = './img/APA.png';
                    break;
            }
        })
    })
}

const alter = () => {
    let current = window.scrollY;

    if (current >= 36) {
        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = '#333';
        });

        mobileMenuToggle.style.padding = "1.8rem 2.3rem";
        navbar.style.backgroundColor = 'white';
        navbar.style.height = '4.5rem';
        headerNav.style.color = '#292D33';
        logoDark.src = './img/logo-dark.svg';
        phoneLink.style.color = '#292D33';
    } else {
        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = 'white';
        });

        mobileMenuToggle.style.padding = "2.05rem 2.3rem";
        navbar.style.backgroundColor = '';
        navbar.style.height = '';
        headerNav.style.color = '';
        logoDark.src = './img/logo-light.svg';
        phoneLink.style.color = '';
    }
}
const navbarFunc = (e) => {
    e.preventDefault();

    mobileMenu.classList.toggle('is-open');
    document.querySelector('body').classList.toggle('bye');

    if (document.querySelector('.is-open')) {
        navbar.style.backgroundColor = 'white';
        navbar.style.height = '4.5rem';
        headerNav.style.color = '#292D33';
        logoDark.src = './img/logo-dark.svg';

        if (mobileMenuToggle.style.padding = "1.8rem 2.3rem") {
            mobileMenuLine.forEach(e => {
                e.style.backgroundColor = '#333';
                e.style.position = 'relative';
                e.style.right = '-5px';
            });

            mobileMenuLine[0].style.transform = 'rotate(45deg) translateY(7px)';
            mobileMenuLine[2].style.transform = 'rotate(-45deg) translateY(-7.5px)';
            mobileMenuLine[1].style.display = 'none';
        } else {
            mobileMenuLine.forEach(e => {
                e.style.backgroundColor = '#333';
                e.style.position = 'relative';
                e.style.right = '-2px';
            });

            mobileMenuLine[0].style.transform = 'rotate(45deg) translateY(3px)';
            mobileMenuLine[2].style.transform = 'rotate(-45deg) translateY(-3.5px)';
            mobileMenuLine[1].style.display = 'none';
        }
    } else if (window.scrollY >= 36) {
        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = '#333';
            e.style.position = '';
            e.style.right = '';
        });

        mobileMenuToggle.style.padding = "1.8rem 2.3rem";
        navbar.style.backgroundColor = 'white';
        navbar.style.height = '4.5rem';
        headerNav.style.color = '#292D33';
        logoDark.src = './img/logo-dark.svg';
        phoneLink.style.color = '#292D33';

        mobileMenuLine[0].style.transform = '';
        mobileMenuLine[2].style.transform = '';
        mobileMenuLine[1].style.display = 'block';
    } else {
        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = 'white';
            e.style.position = '';
            e.style.right = '';
        });

        mobileMenuToggle.style.padding = "2.05rem 2.3rem";
        navbar.style.backgroundColor = '';
        navbar.style.height = '';
        headerNav.style.color = '';
        logoDark.src = './img/logo-light.svg';

        mobileMenuLine[0].style.transform = '';
        mobileMenuLine[2].style.transform = '';
        mobileMenuLine[1].style.display = 'block';
    }
}

const swiper = new Swiper('.slider-features', {
    speed: 400,
    slidesPerView: 1,
    navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
    },
    breakpoints: {
        374: {
            slidesPerView: 1.5,
        },
        575: {
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
const swiperSteps = new Swiper('.slider-steps', {
    speed: 400,
    slidesPerView: 1,
    navigation: {
        nextEl: '.steps-button-next',
        prevEl: '.steps-button-prev',
    },
    breakpoints: {
        374: {
            slidesPerView: 1.5,
        },
        575: {
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

const swiperBlog = new Swiper('.slider-blog', {
    speed: 400,
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
        nextEl: '.blog-button-next',
        prevEl: '.blog-button-prev',
    },
});

if (window.screen.width <= 992) {
    changing(elementArray);
}
mobileMenuToggle.addEventListener('click', e => {
    navbarFunc(e);
});

document.addEventListener('scroll', () => {
    alter();
});

alter();
hover(trigger);