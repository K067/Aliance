<?php 
$page_title='Современная методология разработки одухотворила всех причастных';
$header_style='bg-blog-more';?>

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
    <link rel="apple-touch-icon" sizes="60x60" href="./img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>
        <?=$page_title?> - Aliance Production
    </title>
</head>

<body>
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item">
                <a href="./about.php" class="mobile-menu-link">О компании</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="./contract.php" class="mobile-menu-link">Контрактное производство</a>
                <ul class="mobile-sub-menu">
                    <li class="mobile-sub-menu-item">
                        <a class="mobile-sub-menu-link" href="contract-chem.php">Автомобильная химия</a>
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
                <a href="./brand.php" class="mobile-menu-link">Собственные торговые марки</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="./news.php" class="mobile-menu-link">Новости</a>
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
                <a href="/about.php" class="header-nav-link">О компании</a>
            </li>
            <li class="header-nav-item">
                <a href="/contract.php" class="header-nav-link">Контрактное производство</a>
            </li>
            <li class="header-nav-item">
                <a href="/brand.php" class="header-nav-link">Собственные торговые марки</a>
            </li>
            <li class="header-nav-item">
                <a href="./news.php" class="header-nav-link">Новости</a>
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
            <div class="header-content header-about-beta crutch header-blog">
                <div class="separator"></div>
                <h1 class="section-title title-about header-color-alt">
                    <?=$page_title?>
                </h1>
                <div class="abyss-links">
                    <a href="./" class="that-links header-color-alt crutch-text">Главная</a>
                    <a href="./news.php" class="that-links alpha-link link-one link-one-alt header-color-alt crutch-text">Блог</a>
                    <a href="#" class="that-links alpha-link link-two header-color-alt crutch-text">
                        <?=$page_title?>
                    </a>
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
                    Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в
                    самых сложных случаях!
                </p>
                <button type="submit" class="button button-back">Вернуться на главную</button>
            </div>
        </div>
    </div>
    <section class="section blog-more-section">
        <div class="social-content">
            <p class="share-text">Поделиться:</p>
            <div class="social-line">
                <a href="" class="social-line-item">
                    <img class="social-line-item-icon" src="./img/social/vk.svg" alt="social-icon">
                </a>
                <a href="" class="social-line-item social-line-item-active">
                    <img class="social-line-item-icon" src="./img/social/facebook.svg" alt="social-icon">
                </a>
                <a href="" class="social-line-item">
                    <img class="social-line-item-icon" src="./img/social/twitter.svg" alt="social-icon">
                </a>
                <a href="" class="social-line-item">
                    <img class="social-line-item-icon" src="./img/social/google-plus.svg" alt="social-icon">
                </a>
            </div>
        </div>
        <div class="container">
            <div class="blog-more-content-wrapper">
                <div class="blog-more-content">
                    <h2 class="blog-more-title">Реализация намеченных плановых заданий</h2>
                    <p class="blog-more-text">Значимость этих проблем настолько очевидна, что постоянное
                        информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение системы
                        обучения кадров, соответствует насущным потребностям. Задача организации, в особенности же
                        укрепление и развитие структуры в значительной степени обуславливает создание форм развития. С
                        другой стороны укрепление и развитие структуры способствует подготовки и реализации системы
                        обучения кадров, соответствует насущным потребностям. Повседневная практика показывает, что
                        укрепление и развитие структуры требуют определения и уточнения систем массового участия. Таким
                        образом начало повседневной работы по формированию позиции позволяет выполнять важные задания по
                        разработке позиций, занимаемых участниками в отношении поставленных задач.
                    </p>
                </div>
            </div>
            <div class="blog-more-content-wrapper blog-second-wrapper">
                <div class="blog-more-content">
                    <h3 class="blog-more-title blog-more-title-second">Равным образом консультация с широким активом
                    </h3>
                    <p class="blog-more-text blog-more-text-beta">Таким образом постоянный количественный рост и сфера
                        нашей активности позволяет оценить значение дальнейших направлений развития. Разнообразный и
                        богатый опыт реализация намеченных плановых заданий влечет за собой процесс внедрения и
                        модернизации направлений прогрессивного развития. С другой стороны консультация с широким
                        активом позволяет оценить значение форм развития. Идейные соображения высшего порядка, а также
                        постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет выполнять
                        важные задания по разработке соответствующий условий активизации. Разнообразный и богатый опыт
                        дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов)
                        участие в формировании соответствующий условий активизации.</p>
                    <p class="blog-more-text blog-more-text-beta">С другой стороны рамки и место обучения кадров влечет
                        за собой процесс внедрения и модернизации систем массового участия. Равным образом консультация
                        с широким активом в значительной степени обуславливает создание дальнейших направлений развития.
                        Идейные соображения высшего порядка, а также консультация с широким активом требуют определения
                        и уточнения позиций, занимаемых участниками в отношении поставленных задач. Равным образом
                        дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации
                        дальнейших направлений развития.</p>
                    <p class="blog-more-text blog-more-text-beta">Разнообразный и богатый опыт начало повседневной
                        работы по формированию позиции позволяет оценить значение позиций, занимаемых участниками в
                        отношении поставленных задач. Разнообразный и богатый опыт реализация намеченных плановых
                        заданий позволяет выполнять важные задания по разработке форм развития. Задача организации, в
                        особенности же постоянный <a href="">количественный рост</a> и сфера нашей активности
                        обеспечивает широкому кругу (специалистов) участие в формировании форм развития.</p>
                </div>
                <picture class="blog-more-image">
                    <source type="image/webp" srcset="./img/pexels-tima-miroshnichenko-9574410-2.webp">
                    <source type="image/png" srcset="./img/pexels-tima-miroshnichenko-9574410-2.png">
                    <img src="./img/pexels-tima-miroshnichenko-9574410-2.png" alt="blog" class="image-scale">
                </picture>
            </div>
            <div class="blog-more-content-wrapper blog-second-wrapper">
                <div class="blog-more-content">
                    <h3 class="blog-more-title blog-more-title-third">Равным образом консультация с широким активом:</h3>
                    <p class="blog-more-text link-like">Идейные соображения высшего порядка, а также консультация с
                        широким активом требуют определения и уточнения позиций.</p>
                    <p class="blog-more-text link-like">С другой стороны консультация с широким активом позволяет
                        оценить значение форм развития.</p>
                    <p class="blog-more-text link-like">Разнообразный и богатый опыт реализация намеченных плановых
                        заданий позволяет выполнять важные задания.</p>
                </div>
            </div>
            <div class="blog-more-content-wrapper blog-third-wrapper">
                <div class="blog-more-content">
                    <h3 class="blog-more-title blog-more-title-second">Равным образом консультация с широким активом
                    </h3>
                    <p class="blog-more-text blog-more-text-beta">С другой стороны рамки и место обучения кадров влечет
                        за собой процесс внедрения и модернизации систем массового участия. <b>Равным образом
                            консультация</b> с широким активом в значительной степени обуславливает создание дальнейших
                        направлений развития. Идейные соображения высшего порядка, а также консультация с широким
                        активом требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных
                        задач. Равным образом дальнейшее развитие различных форм деятельности влечет за собой процесс
                        внедрения и модернизации дальнейших направлений развития.</p>
                    <ol class="blog-number-list">
                        <li class="blog-more-text link-like-alt">Идейные соображения высшего порядка, а также
                            консультация с широким активом требуют определения и уточнения позиций.</li>
                        <li class="blog-more-text link-like-alt">С другой стороны консультация с широким активом
                            позволяет оценить значение форм развития.</li>
                        <li class="blog-more-text link-like-alt">Разнообразный и богатый опыт реализация намеченных
                            плановых заданий позволяет выполнять важные задания.</li>
                    </ol>
                </div>
            </div>
            <div class="social-content crutch-social">
                <p class="share-text">Поделиться:</p>
                <div class="social-line">
                    <a href="" class="social-line-item">
                        <img class="social-line-item-icon" src="./img/social/vk.svg" alt="social-icon">
                    </a>
                    <a href="" class="social-line-item social-line-item-active">
                        <img class="social-line-item-icon" src="./img/social/facebook.svg" alt="social-icon">
                    </a>
                    <a href="" class="social-line-item">
                        <img class="social-line-item-icon" src="./img/social/twitter.svg" alt="social-icon">
                    </a>
                    <a href="" class="social-line-item">
                        <img class="social-line-item-icon" src="./img/social/google-plus.svg" alt="social-icon">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section blog-more-slider">
        <div class="container">
            <div class="separator"></div>
            <h2 class="section-title">Так же вас может заинтересовать:</h2>
            <div class="swiper slider-blog">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide blog-card blog-card-main">
                        <picture class="blog-image">
                            <source type="image/webp" srcset="./img/pexels-tima-miroshnichenko-9574410-2.webp">
                            <source type="image/png" srcset="./img/pexels-tima-miroshnichenko-9574410-2.png">
                            <img src="./img/pexels-tima-miroshnichenko-9574410-2.png" alt="blog" class="image-scale">
                        </picture>
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся<br>
                            непростую
                            экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>
                    <a href="#" class="swiper-slide blog-card blog-card-main">
                        <picture class="blog-image">
                            <source type="image/webp" srcset="./img/pexels-pixabay-2086611.webp">
                            <source type="image/png" srcset="./img/pexels-pixabay-2086611.png">
                            <img src="./img/pexels-pixabay-2086611.png" alt="blog" class="image-scale">
                        </picture>
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text">Сложно сказать, почему элементы политического процесса
                            функционально<br>
                            разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                    <a href="#" class="swiper-slide blog-card blog-card-main">
                        <picture class="blog-image">
                            <source type="image/webp" srcset="./img/pexels-tima-miroshnichenko-9574410-2.webp">
                            <source type="image/png" srcset="./img/pexels-tima-miroshnichenko-9574410-2.png">
                            <img src="./img/pexels-tima-miroshnichenko-9574410-2.png" alt="blog" class="image-scale">
                        </picture>
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся<br>
                            непростую
                            экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>
                    <a href="#" class="swiper-slide blog-card blog-card-main">
                        <picture class="blog-image">
                            <source type="image/webp" srcset="./img/pexels-pixabay-2086611.webp">
                            <source type="image/png" srcset="./img/pexels-pixabay-2086611.png">
                            <img src="./img/pexels-pixabay-2086611.png" alt="blog" class="image-scale">
                        </picture>
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text">Сложно сказать, почему элементы политического процесса
                            функционально<br>
                            разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                </div>
                <div class="blog-slider-footer">
                    <div></div>
                    <div class="blog-buttons main-buttons">
                        <div class="blog-button-prev main-button-prev"><img src="./img/arrow-left.svg" alt="left"
                                class="main-arrow-literally">
                        </div>
                        <div class="blog-button-next main-button-next"><img src="./img/arrow-right.svg" alt="right"
                                class="main-arrow-literally"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta">
        <div class="bg-grey section-cta">
            <picture class="cta-image">
                <source type="image/webp" srcset="./img/__400-1.webp">
                <source type="image/png" srcset="./img/__400-1.png">
                <img src="./img/__400-1.png" alt="cta" class="image-scale">
            </picture>
            <div class="cta-form-wrapper container">
                <form action="./handler.php" class="cta-form" id="cta">
                    <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
                    <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит
                        на все
                        интересующие вопросы и поможем даже в самых сложных случаях!</p>
                    <div class="input-group-wrapper">
                        <div class="input-group">
                            <input id="user-name" type="text" class="input" name="username" placeholder=" ">
                            <label for="user-name" class="label">Имя</label>
                        </div>
                        <div class="input-group">
                            <input id="user-phone" type="tel" class="input" name="userphone" placeholder=" ">
                            <label for="user-phone" class="label">Номер телефона</label>
                        </div>
                    </div>
                    <div class="cta-form-footer">
                        <button type="submit" class="button cta-form-button send-it">Отправить заявку</button>
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
    </section>
    <?php include_once('footer.php')?>
</body>

</html>