const navbar = document.querySelector('.navbar');
const mobileMenu = document.querySelector('.mobile-menu');
const trigger = document.querySelectorAll('.card-brand');
const headerNav = navbar.querySelector('.header-nav');
const logoDark = navbar.querySelector('.logo-light');
const phoneLink = navbar.querySelector('.header-phone');
const mobileMenuToggle = navbar.querySelector('.mobile-menu-toggle');
const mobileMenuLine = navbar.querySelectorAll('.mobile-menu-line');
const modal = document.querySelectorAll('.modal');
const forms = document.querySelectorAll('form');
const buttons = document.querySelectorAll('.modal-button');
const name = document.querySelectorAll('input[name=username]');

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
        319: {
            slidesPerView: 2.5,
        },
        374: {
            slidesPerView: 2.5,
        },
        575: {
            slidesPerView: 2,
        },
        767: {
            slidesPerView: 2.5,
        },
        1199: {
            slidesPerView: 3,
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
        1001: {
            slidesPerView: 2,
        },
        1199: {
            slidesPerView: 2,
        },
    }
});

const swiperResearch = new Swiper('.slider-research', {
    speed: 400,
    slidesPerView: 2.5,
    loop: true,
    spaceBetween: 30,
    navigation: {
        nextEl: '.blog-button-next',
        prevEl: '.blog-button-prev',
    },
});

const mySwiper = new Swiper('.slider-blog-set', {
    speed: 400,
    slidesPerView: 1,
    spaceBetween: 30,
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
        991: {
            slidesPerView: 1,
        },
        1199: {
            slidesPerView: 2,
        },
    }
})

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

const /*!*/ borders = () => {
    if (document.querySelector('.crutch') && document.querySelector('.header-features')) {
        const item = document.querySelector('.slider-features');
        const font = item.querySelector('.header-features');
        const border = document.querySelectorAll('.header-features-items, .header-arrow');
        const borderNavbar = document.querySelector('.navbar');
        const borderMobile = borderNavbar.querySelector('.mobile-menu-toggle');
        const borderLogo = borderNavbar.querySelector('.navbar-logo');
        const arrows = document.querySelectorAll('.the-arrow');

        font.style.color = 'black';

        arrows.forEach(e => {
            e.style.filter = 'brightness(20%)';
        })

        borderNavbar.style.borderBottom = '0.0625rem solid #EBEBF0';
        borderLogo.style.borderRight = '0.0625rem solid #EBEBF0';
        borderMobile.style.borderRight = '0.0625rem solid #EBEBF0';

        border.forEach(e => {
            e.style.border = '0.0625rem solid #EBEBF0';
        });
    }
}

const alter = () => {

    let current = window.scrollY;

    if (current >= 36 ||/*!beta!*/ document.querySelector('.crutch')) {
        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = '#333';
        });

        document.querySelector('.crutch') ?
            mobileMenuToggle.style.padding = "2.25rem 2.5rem"
            :
            mobileMenuToggle.style.padding = "1.45rem 2.5rem";

        navbar.style.backgroundColor = 'white';
        /*!beta!*/
        if (current >= 36) {
            navbar.style.height = '4rem';
            mobileMenuToggle.style.padding = "1.45rem 2.5rem";

        } else {
            navbar.style.height = '';
            mobileMenuToggle.style.padding = "2.25rem 2.5rem";
        }

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

const navbarFunc = e => {
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
    } else if (document.querySelector('.crutch')) {
        mobileMenuLine.forEach(e => {
            e.style.backgroundColor = '#333';
            e.style.position = '';
            e.style.right = '';
        });

        mobileMenuToggle.style.padding = "2.25rem 2.5rem";
        navbar.style.backgroundColor = 'white';
        navbar.style.height = '';
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

const defaultValue = () => {
    modal.forEach(e => {
        e.style.display = 'none';
        e.style.transform = 'translateX(-100%)';
        e.style.visibility = 'hidden';
        e.style.opacity = '0';
    });
}

const modalFunc = (elem) => {
    elem.style.display = 'flex';
    elem.style.transform = 'translateX(0)';
    elem.style.visibility = 'visible';
    elem.style.opacity = '1';

    document.body.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            defaultValue();
        }
    });

    elem.addEventListener('click', e => {
        if (!e.target.closest('.modal-form-wrapper') || e.target.closest('.modal-close') || e.target.closest('.button-back')) {
            defaultValue();
        }
    });
}

const maskPhone = (selector, masked = '+7 (___) ___-__-__') => {
    const elems = document.querySelectorAll(selector);

    const mask = event => {
        const { keyCode, target } = event;
        const template = masked;
        const def = template.replace(/\D/g, '');
        const val = target.value.replace(/\D/g, '');

        let i = 0;
        let newValue = template.replace(/[_\d]/g, (a) =>
            i < val.length ? val.charAt(i++) || def.charAt(i) : a);

        i = newValue.indexOf('_');

        if (i !== -1)
            newValue = newValue.slice(0, i);

        let reg = template.substr(0, target.value.length)
            .replace(/_+/g, ({ length }) => `\\d{1,${length}}`)
            .replace(/[+()]/g, '\\$&');

        reg = new RegExp(`^${reg}$`);

        if (!reg.test(target.value) || target.value.length < 5 || keyCode > 47 && keyCode < 58) {
            target.value = newValue;
        }

        if (event.type == 'blur' && target.value.length < 5) {
            target.value = '';
        }
    };

    for (const elem of elems) {
        elem.addEventListener("input", mask);
        elem.addEventListener("focus", mask);
        elem.addEventListener("blur", mask);
    }
};

const nameValidation = name => {
    name.forEach((value) => {
        value.addEventListener('input', e => {
            e.target.value = e.target.value.replace(/[^а-яё\- ]/gi, '');
        });
    });
}

const lengthValidation = list => {
    let success = true;

    list.forEach(elem => {
        switch (elem.getAttribute('name')) {
            case 'username':
                if (/^[а-яё]{2,}/gi.test(elem.value.trim())) {
                    return;
                }
                break;
            case 'userphone':
                if (elem.value.length === 18) {
                    return;
                }
                break;
            default: return;
        }

        success = false;
    });

    return success;
}

const formSending = (data, url) => {
    return fetch(url, {
        method: 'POST',
        body: data,
    });
}

const submitForm = () => {
    forms.forEach(data => {
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
                    rule: 'maxLength',
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
            .onSuccess((event) => {
                event.preventDefault();
                const formElements = event.target;
                const formData = new FormData(formElements);

                if (lengthValidation(formElements.querySelectorAll('input'))) {
                    formSending(formData, formElements.getAttribute('action')).then(() => {
                        defaultValue();
                        modalFunc(modal[1]);

                        formElements.querySelectorAll('input').forEach(input => {
                            input.value = '';
                        });

                    }).catch(() => {
                        alert('no');
                    });
                } else {
                    alert('ну проверь');
                }
            });
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

buttons.forEach(e => {
    e.addEventListener('click', () => {
        modalFunc(modal[0]);
    });
});

alter();
hover(trigger);
submitForm();
maskPhone('[name="userphone"]', '+7 (___) ___-__-__');
nameValidation(name);
borders();