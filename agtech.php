<?php 
$page_title='Автохимия AG-Tech';
$header_style='bg-grey bg-image-auto';?>

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
    <link rel="apple-touch-icon" sizes="57x57" href="./img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="./img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="./img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="./img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="./img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="./img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="./img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="./img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="./img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="./img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <title><?=$page_title?> - Aliance Production</title>
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
                    <a href="./contract.php" class="that-links alpha-link link-one">Собственные торговые марки</a>
                    <a href="#" class="that-links alpha-link link-two"><?=$page_title?></a>
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
<section class="section founder contract-alpha">
<picture class="ali-alt">
  <source type="image/webp" srcset="./img/frame393.webp">
  <source type="image/png" srcset="./img/frame393.png">
  <img src="./img/frame393.png" alt="founder" class="image-scale">
</picture>
        <div class="container">
            <div class="founder-content-wrapper">
                <div class="founder-content contract-content">
                    <div class="separator"></div>
                    <h2 class="section-title contract-title">Собственное производство автохимия AG-Tech</h2>
                    <p class="founder-text">Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.
                    </p>
                    <p class="founder-text text-beta">
Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.
                    </p>
                 </div>
            </div>
        </div>
    </section>
    <div class="swiper slider-features container slider-about">
                <ul class="swiper-wrapper header-features">
                    <li class="swiper-slide header-features-items">
                        <img src="./img/features/timer.svg" alt="" class="header-features-icon">
                        <p class="header-features-text">Непрерывная работа c 2017 года</p>
                    </li>
                    <li class="swiper-slide header-features-items">
                        <img src="./img/features/paper.svg" alt="" class="header-features-icon">
                        <p class="header-features-text">Вся продукция сертифицирована</p>
                    </li>
                    <li class="swiper-slide header-features-items">
                        <img src="./img/features/man.svg" alt="" class="header-features-icon">
                        <p class="header-features-text">Контроль качества на всех этапах</p>
                    </li>
                    <li class="swiper-slide header-features-items">
                        <img src="./img/features/vector.svg" alt="" class="header-features-icon">
                        <p class="header-features-text">Возможны поставки по всей России</p>
                    </li>
                    <li class="swiper-slide header-features-items">
                        <img src="./img/features/speed.svg" alt="" class="header-features-icon">
                        <p class="header-features-text">Оперативное производство</p>
                    </li>
                </ul>
            </div>
            <div class="slider-buttons">
                <div class="slider-button-prev header-arrow"><img src="./img/arrow-left.svg" alt="left" class="the-arrow"></div>
                <div class="slider-button-next header-arrow"><img src="./img/arrow-right.svg" alt="right" class="the-arrow"></div>
     </div>
     <section class="section label-general">
        <div class="bg-grey section-cta general-grey">
        <picture class="general-image">
              <source type="image/webp" srcset="./img/frame63.webp">
              <source type="image/png" srcset="./img/frame63.png">
              <img src="./img/frame63.png" alt="founder" class="image-scale">
            </picture>
            <div class="container">
<div class="founder-content-wrapper about-lay-wrapper">
            <div class="founder-content about-lay-content-second general-lay chem-production">
                <div class="separator"></div>
                <h2 class="section-title founder-title about-lay-title alt-alt general-title">Генеральный дистрибьютор премиальной
автохимии</h2>
                <p class="founder-text">Внезапно, активно развивающиеся страны третьего мира могут быть объявлены нарушающими общечеловеческие нормы этики и морали.</p>
                <ul class="clients-list clients-list-production general-list">
                        <li class="clients-list-item contract-list-item general-list-item">
                            <img src="./img/clients/him.svg" alt="logo" class="clients-image">
                            Полное описание товаров
                        </li>
                        <li class="clients-list-item contract-list-item general-list-item">
                        <img src="./img/clients/car.svg" alt="logo" class="clients-image">
                          Актуальные цены
                        </li>
                        <li class="clients-list-item contract-list-item general-list-item">
                            <img src="./img/production/brush.svg" alt="logo" class="clients-image">
                         Лаки и краски
                        </li>
                        <li class="clients-list-item contract-list-item general-list-item">
                            <img src="./img/clients/him.svg" alt="logo" class="clients-image">
                         Химические производства
                        </li>
                    </ul>
                    <button class="button button-download">Скачать каталог</button>
                    <picture class="general-image another-crutch-image">
              <source type="image/webp" srcset="./img/frame63.webp">
              <source type="image/png" srcset="./img/frame63.png">
              <img src="./img/frame63.png" alt="founder" class="image-scale">
            </picture>
                </div>
            </div>
            </div>
        </div>
     </section>
     <section class="section blog-research research-section">
        <div class="container research-type">
            <div class="separator"></div>
            <h2 class="section-title research-title">Исследовательский центр Aliance production</h2>
            <div class="text-research-content">
                <p class="text-research">
                    Явные признаки победы институционализации рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Приятно, граждане, наблюдать, как активно развивающиеся страны третьего мира могут быть ограничены исключительно образом мышления. Лишь независимые государства набирают популярность среди определенных слоев населения, а значит, должны быть указаны как претенденты на роль ключевых факторов. Лишь акционеры крупнейших компаний могут быть призваны к ответу.
            </p>
            <p class="text-research text-research-beta">
                С учётом сложившейся международной обстановки, синтетическое тестирование требует определения и уточнения анализа существующих паттернов поведения. Не следует, однако, забывать, что высокотехнологичная концепция общественного уклада представляет собой интересный эксперимент проверки как самодостаточных, так и внешне зависимых концептуальных решений. Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление однозначно фиксирует необходимость стандартных подходов.
            </p>
        </div>
            <div class="swiper slider-research">
                <div class="swiper-wrapper research-wrapper">
                    <a href="#" class="swiper-slide blog-card research-card">
                    <picture class="blog-image">
                    <source type="image/webp" srcset="./img/pexels-tima-miroshnichenko-9574410-2.webp">
                    <source type="image/png" srcset="./img/pexels-tima-miroshnichenko-9574410-2.png">
                    <img src="./img/pexels-tima-miroshnichenko-9574410-2.png" alt="blog" class="image-scale">
                    </picture>
                    </a>
                    <a href="#" class="swiper-slide blog-card research-card">
                    <picture class="blog-image">
                    <source type="image/webp" srcset="./img/pexels-pixabay-2086611.webp">
                    <source type="image/png" srcset="./img/pexels-pixabay-2086611.png">
                    <img src="./img/pexels-pixabay-2086611.png" alt="blog" class="image-scale">
                    </picture>
                    </a>
                    <a href="#" class="swiper-slide blog-card research-card">
                    <picture class="blog-image">
                    <source type="image/webp" srcset="./img/pexels-tima-miroshnichenko-9574410-2.webp">
                    <source type="image/png" srcset="./img/pexels-tima-miroshnichenko-9574410-2.png">
                    <img src="./img/pexels-tima-miroshnichenko-9574410-2.png" alt="blog" class="image-scale">
                    </picture>
                    </a>
                    <a href="#" class="swiper-slide blog-card research-card">
                    <picture class="blog-image">
                    <source type="image/webp" srcset="./img/pexels-pixabay-2086611.webp">
                    <source type="image/png" srcset="./img/pexels-pixabay-2086611.png">
                    <img src="./img/pexels-pixabay-2086611.png" alt="blog" class="image-scale">
                    </picture>
                    </a>
                    <a href="#" class="swiper-slide blog-card research-card">
                    <picture class="blog-image">
                    <source type="image/webp" srcset="./img/pexels-tima-miroshnichenko-9574410-2.webp">
                    <source type="image/png" srcset="./img/pexels-tima-miroshnichenko-9574410-2.png">
                    <img src="./img/pexels-tima-miroshnichenko-9574410-2.png" alt="blog" class="image-scale">
                    </picture>
                    </a>
                    <a href="#" class="swiper-slide blog-card research-card">
                    <picture class="blog-image">
                    <source type="image/webp" srcset="./img/pexels-pixabay-2086611.webp">
                    <source type="image/png" srcset="./img/pexels-pixabay-2086611.png">
                    <img src="./img/pexels-pixabay-2086611.png" alt="blog" class="image-scale">
                    </picture>
                    </a>
                    <a href="#" class="swiper-slide blog-card research-card">
                    <picture class="blog-image">
                    <source type="image/webp" srcset="./img/pexels-tima-miroshnichenko-9574410-2.webp">
                    <source type="image/png" srcset="./img/pexels-tima-miroshnichenko-9574410-2.png">
                    <img src="./img/pexels-tima-miroshnichenko-9574410-2.png" alt="blog" class="image-scale">
                    </picture>
                    </a>
                    <a href="#" class="swiper-slide blog-card research-card">
                    <picture class="blog-image">
                    <source type="image/webp" srcset="./img/pexels-pixabay-2086611.webp">
                    <source type="image/png" srcset="./img/pexels-pixabay-2086611.png">
                    <img src="./img/pexels-pixabay-2086611.png" alt="blog" class="image-scale">
                    </picture>
                    </a>
                </div>
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
    </section>
 <?php include_once('./templates/schem.php')?>
 <section class="section clients clients-alt">
        <div class="container">
            <div class="clients-wrapper">
                <div class="clients-content">
                    <div class="separator"></div>
                    <h2 class="section-title clients-title">Производим аэрозольную продукцию для разных сфер</h2>
                    <ul class="clients-list">
                        <li class="clients-list-item">
                            <img src="./img/clients/him.svg" alt="logo" class="clients-image">
                            Химические производства
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/clients/car.svg" alt="logo" class="clients-image">
                            Автомойки
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/clients/eat.svg" alt="logo" class="clients-image">
                            Пищевая продукция
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/clients/brush.svg" alt="logo" class="clients-image">
                            Лаки и краски
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/clients/cosmetic.svg" alt="logo" class="clients-image">
                            Косметические средства
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/clients/car-cosm.svg" alt="logo" class="clients-image">
                            Автомобильная косметика
                        </li>
                        <li class="clients-list-item">
                            <img src="/img/clients/shirt.svg" alt="logo" class="clients-image">
                            Косметика по уходу за одеждой
                        </li>
                        <li class="clients-list-item">
                            <img src="/img/clients/boots.svg" alt="logo" class="clients-image">
                            Косметика по уходу за обувью
                        </li>
                        <li class="clients-list-item">
                            <img src="/img/clients/bricks.svg" alt="logo" class="clients-image">
                            Строительные материалы
                        </li>
                        <li class="clients-list-item">
                            <img src="/img/clients/more.svg" alt="logo" class="clients-image">
                            И многих других
                        </li>
                    </ul>
                </div>
                <div class="clients-logo-list">
                    <a href="#" class="clients-logo">
                        <img src="./img/9dfe03a96a3a8e492d839a0631c4d486.png" alt="" class="burger-king">
                    </a>
                    <a href="#" class="clients-logo">
                        <img src="./img/9dfe03a96a3a8e492d839a0631c4d486.png" alt="" class="burger-king">
                    </a>
                    <a href="#" class="clients-logo">
                        <img src="./img/9dfe03a96a3a8e492d839a0631c4d486.png" alt="" class="burger-king">
                    </a>
                    <a href="#" class="clients-logo">
                        <img src="./img/9dfe03a96a3a8e492d839a0631c4d486.png" alt="" class="burger-king">
                    </a>
                    <a href="#" class="clients-logo">
                        <img src="./img/9dfe03a96a3a8e492d839a0631c4d486.png" alt="" class="burger-king">
                    </a>
                    <a href="#" class="clients-logo">
                        <img src="./img/9dfe03a96a3a8e492d839a0631c4d486.png" alt="" class="burger-king">
                    </a>
                    <a href="#" class="clients-logo">
                        <img src="./img/9dfe03a96a3a8e492d839a0631c4d486.png" alt="" class="burger-king">
                    </a>
                    <a href="#" class="clients-logo">
                        <img src="./img/9dfe03a96a3a8e492d839a0631c4d486.png" alt="" class="burger-king">
                    </a>
                    <a href="#" class="clients-logo">
                        <img src="./img/9dfe03a96a3a8e492d839a0631c4d486.png" alt="" class="burger-king">
                    </a>
                </div>
            </div>
        </div>
    </section>
<section class="cta cta-alt">
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
     <?php include_once('footer.php');?>
</body>
</html>