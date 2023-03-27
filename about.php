<!DOCTYPE html>
<html lang="ru">

<head>
    <script src="./js/swiper-bundle.min.js" defer></script>
    <script src="./js/just-validate.production.min.js" defer></script>
    <script src="./js/unversalMegaScript.js" defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>О компании - Aliance Production</title>
</head>

<body>
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">О компании</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">Контрактное производство</a>
                <ul class="mobile-sub-menu">
                    <li class="mobile-sub-menu-item">
                        <a class="mobile-sub-menu-link" href="#">Автомобильная химия</a>
                    </li>
                    <li class="mobile-sub-menu-item">
                        <a class="mobile-sub-menu-link" href="#">Бытовая химия</a>
                    </li>
                    <li class="mobile-sub-menu-item">
                        <a class="mobile-sub-menu-link" href="#">Дезинфицирующие средства</a>
                    </li>
                    <li class="mobile-sub-menu-item">
                        <a class="mobile-sub-menu-link" href="#">Пищевые аэрозоли</a>
                    </li>
                    <li class="mobile-sub-menu-item">
                        <a class="mobile-sub-menu-link" href="#">Косметическая продукция</a>
                    </li>
                    <li class="mobile-sub-menu-item">
                        <a class="mobile-sub-menu-link" href="#">Краски аэрозольные</a>
                    </li>
                </ul>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">Собственные торговые марки</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">Новости</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">Контакты</a>
            </li>
        </ul>
        <a href="tel:+74996861014" class="mobile-phone">
            +7 (499) 686-10-14
        </a>
        <div class="mobile-info">
            <img src="./img/local.svg" alt="local" class="location-mark">
            <address class="mobile-info-property">г. Москва, Холодильный пер. 4к1с8</address>
        </div>
        <div class="mobile-info">
            <img src="./img/mail.svg" alt="local" class="location-mark">
            <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-property">a.dragunov@tdaliance.ru</a>
        </div>
    </div>
    <nav class="navbar">
        <a href="" class="mobile-menu-toggle">
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
            <div class="mobile-menu-line"></div>
        </a>
        <a href="./" class="navbar-logo">
            <img src="./img/logo-light.svg" alt="Aliance Production" class="logo-light">
        </a>
        <ul class="header-nav">
            <li class="header-nav-item">
                <a href="#" class="header-nav-link">О компании</a>
            </li>
            <li class="header-nav-item">
                <a href="#" class="header-nav-link">Контрактное производство</a>
            </li>
            <li class="header-nav-item">
                <a href="#" class="header-nav-link">Собственные торговые марки</a>
            </li>
            <li class="header-nav-item">
                <a href="#" class="header-nav-link">Новости</a>
            </li>
            <li class="header-nav-item">
                <a href="#" class="header-nav-link">Контакты</a>
            </li>
        </ul>
        <div class="header-phone">
            <img src="./img/phone-logo.svg" alt="icon: phone" class="phone-icon">
            <a href="tel:+74996861014" class="header-phone-link">
                +7 (499) 686-10-14
            </a>
        </div>
        <button class="navbar-button button">
            <img src="./img/white-phone.svg" alt="icon: phone" class="button-icon">
            <span class="button-text">Получить консультацию</span>
        </button>
    </nav>
    <header class="header bg-grey">
        <!-- image will be referenced as a bg -->
        <div class="container">
            <div class="header-content header-about-beta">
                <div class="separator"></div>
                <h1 class="section-title title-about">о компании</h1>
                <div class="abyss-links">
                    <a href="./" class="that-links">Главная</a>
                    <span class="span-line">—</span>
                    <!-- <a href="" class="that-links"></a> -->
                    <!-- <span class="span-line">—</span> -->
                    <a href="" class="that-links">О компании</a>
                </div>
            </div>
        </div>
    </header>
<?php include_once('footer.php')?>
    <div class="modal">
        <div class="modal-form-wrapper">
            <h2 class="modal-title">Есть вопросы?</h2>
            <a href="#" class="modal-close">
                <img src="./img/close.svg" alt="close" class="close-button">
            </a>
            <p class="modal-text">
                Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
                поможем даже в самых сложных случаях!
            </p>
            <form action="" class="modal-form">
                <div class="input-group-wrapper modal-input">
                    <div class="input-group modal-group">
                        <input id="modal-name" type="text" class="input modal-type" name=username placeholder=" ">
                        <label for="modal-name" class="label modal-label">Имя</label>
                    </div>
                    <div class="input-group modal-group">
                        <input id="modal-phone" type="tel" class="input modal-type" name=userphone placeholder=" ">
                        <label for="modal-phone" class="label modal-label">Номер телефона</label>
                    </div>
                </div>
                <div class="modal-form-footer">
                    <button type="submit" class="button modal-form-button">Отправить заявку</button>
                    <div class="notify">
                        <img src="./img/shield.svg" alt="form icon" class="notify-icon">
                        <p class="notify-text">
                            Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                            конфиденциальность информации!
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>