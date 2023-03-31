<!DOCTYPE html>
<html lang="ru">

<head>
    <script src="./js/swiper-bundle.min.js" defer></script>
    <script src="./js/just-validate.production.min.js" defer></script>
    <script src="./js/unversalMegaScript.js" defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title><?=$page_title?> - Aliance Production</title>
</head>

<body>
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
                <a href="/about.php" class="header-nav-link">О компании</a>
            </li>
            <li class="header-nav-item">
                <a href="/contract.php" class="header-nav-link">Контрактное производство</a>
            </li>
            <li class="header-nav-item">
                <a href="/brand.php" class="header-nav-link">Собственные торговые марки</a>
            </li>
            <li class="header-nav-item">
                <a href="/news.php" class="header-nav-link">Новости</a>
            </li>
            <li class="header-nav-item">
                <a href="/contact.php" class="header-nav-link">Контакты</a>
            </li>
        </ul>
        <div class="header-phone">
            <img src="./img/phone-logo.svg" alt="icon: phone" class="phone-icon">
            <a href="tel:+74996861014" class="header-phone-link">
                +7 (499) 686-10-14
            </a>
        </div>
        <button class="navbar-button button modal-button">
            <img src="./img/white-phone.svg" alt="icon: phone" class="button-icon">
            <span class="button-text">Получить консультацию</span>
        </button>
    </nav>
    <header class="header <?=$header_style?>">
        <div class="container">
            <div class="header-content header-about-beta crutch">
                <div class="separator"></div>
                <h1 class="section-title title-about"><?=$page_title?></h1>
                <div class="abyss-links">
                    <a href="./" class="that-links">Главная</a>
                    <span class="span-line">—</span>
                    <!-- <a href="" class="that-links"></a> -->
                    <!-- <span class="span-line">—</span> -->
                    <a href="" class="that-links"><?=$page_title?></a>
                </div>
            </div>
        </div>
    </header>
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
            <form action="./handler.php" class="modal-form">
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
                    <button type="submit" class="button modal-form-button send-it">Отправить заявку</button>
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
    <div class="modal application">
        <div class="modal-form-wrapper application-wrapper">
            <img src="./img/thanks_illu.svg" alt="thanks-image" class="thanks">
          <div class="application-content">
              <h2 class="modal-title">Спасибо за заявку!</h2>
              <a href="#" class="modal-close">
                  <img src="./img/close.svg" alt="close" class="close-button">
                </a>
                <p class="modal-text">
                    Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
                </p>
                <button type="submit" class="button button-back">Вернуться на главную</button>
            </div>
        </div>
    </div>
</body>

</html>