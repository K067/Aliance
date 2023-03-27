const navbar = document.querySelector('.navbar');
const mobileMenu = document.querySelector('.mobile-menu');
const trigger = document.querySelectorAll('.card-brand');

const headerNav = navbar.querySelector('.header-nav');
const logoDark = navbar.querySelector('.logo-light');
const phoneLink = navbar.querySelector('.header-phone');
const mobileMenuToggle = navbar.querySelector('.mobile-menu-toggle');
const mobileMenuLine = navbar.querySelectorAll('.mobile-menu-line');
const modal = document.querySelector('.modal');

let buttons = [
    document.querySelector('.navbar-button'),
    document.querySelector('.header-button')
];
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

const hoverOff = (e) => {
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

    if (current >= 36 || !document.querySelector('.header-image')) {
        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = '#333';
        });

        mobileMenuToggle.style.padding = "1.45rem 2.5rem";
        navbar.style.backgroundColor = 'white';
        /*!beta!*/
        current >= 36 ?
            navbar.style.height = '4rem'
            :
            navbar.style.height = '';
        headerNav.style.color = '#292D33';
        logoDark.src = './img/logo-dark.svg';
        phoneLink.style.color = '#292D33';
    } else {
        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = 'white';
        });

        mobileMenuToggle.style.padding = "2.25rem 2.5rem";
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
        navbar.style.height = '4rem';
        headerNav.style.color = '#292D33';
        logoDark.src = './img/logo-dark.svg';

        if (mobileMenuToggle.style.padding = "2.25rem 2.5rem") {
            mobileMenuLine.forEach(e => {
                e.style.backgroundColor = '#333';
                e.style.position = 'relative';
                e.style.right = '-5px';
            });

            mobileMenuToggle.style.padding = "1.55rem 2.5rem"

            mobileMenuLine[0].style.transform = 'rotate(45deg) translateY(7px)';
            mobileMenuLine[2].style.transform = 'rotate(-45deg) translateY(-7px)';
            mobileMenuLine[1].style.display = 'none';
        } else {
            mobileMenuLine.forEach(e => {
                e.style.backgroundColor = '#333';
                e.style.position = 'relative';
                e.style.right = '-2px';
            });

            mobileMenuLine[0].style.transform = 'rotate(45deg) translateY(3px)';
            mobileMenuLine[2].style.transform = 'rotate(-45deg) translateY(-3px)';
        }
    } else if (window.scrollY >= 36) {
        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = '#333';
            e.style.position = '';
            e.style.right = '';
        });

        mobileMenuToggle.style.padding = "1.45rem 2.5rem";
        navbar.style.backgroundColor = 'white';
        navbar.style.height = '4rem';
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

        mobileMenuToggle.style.padding = "2.25rem 2.5rem";
        navbar.style.backgroundColor = '';
        navbar.style.height = '';
        headerNav.style.color = '';
        logoDark.src = './img/logo-light.svg';

        mobileMenuLine[0].style.transform = '';
        mobileMenuLine[2].style.transform = '';
        mobileMenuLine[1].style.display = 'block';
    }
}

const modalTrigger = () => {
    buttons.forEach(e => {
        e.addEventListener('click', () => {
            modal.style.display = 'flex';
            modal.style.transform = 'translateX(0)';
            modal.style.visibility = 'visible';
            modal.style.opacity = '1';

            document.body.style.overflowY = 'scroll';
            document.body.style.position = 'fixed';
            document.body.style.width = '100%';
        });
    });

    document.body.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            defaultValue();
        }
    });

    modal.addEventListener('click', e => {
        if (!e.target.closest('.modal-form-wrapper') || e.target.closest('.modal-close')) {
            defaultValue();
        }
    });

    const defaultValue = () => {
        modal.style.display = 'none';
        modal.style.transform = 'translateX(-100%)';
        modal.style.visibility = 'hidden';
        modal.style.opacity = '0';

        document.body.style.position = 'static';
        document.body.style.width = '';
    }

    defaultValue();
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
    slidesPerView: 1,
    loop: true,
    spaceBetween: 30,
    navigation: {
        nextEl: '.blog-button-next',
        prevEl: '.blog-button-prev',
    },
    breakpoints: {
        374: {
            slidesPerView: 1,
        },
        575: {
            slidesPerView: 1,
        },
        767: {
            slidesPerView: 1,
        },
        1199: {
            slidesPerView: 2,
        },
    }
});

const formValidation = () => {
    const formData = document.querySelectorAll('form')

    formData.forEach(data => {
        const validation = new JustValidate(data, {
            errorFieldCssClass: 'is-invalid',
        });
        validation
            .addField('input[name=username]', [
                {
                    rule: 'required',
                    errorMessage: 'Укажите имя',
                },
                {
                    rule: 'required',
                    value: 50,
                    errorMessage: 'Не более 50 символов',
                },
            ])
            .addField('input[name=userphone]', [
                {
                    rule: 'required',
                    errorMessage: 'Укажите телефон',
                },
            ])
    });
}


if (window.screen.width <= 768) {
    hoverOff(elementArray);
}

mobileMenuToggle.addEventListener('click', e => {
    navbarFunc(e);
});

document.addEventListener('scroll', () => {
    alter();
});

modalTrigger();
alter();
hover(trigger);
formValidation();