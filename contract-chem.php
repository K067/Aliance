<?php 
$page_title='Автомобильная химия';
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
    <title><?=$page_title?> - Aliance Production</title>
</head>
<body>
<div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item">
                <a href="" class="mobile-menu-link">О компании</a>
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
                    <a href="" class="that-links alpha-link">Контрактное производство</a>
                    <a href="" class="that-links alpha-link"><?=$page_title?></a>
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
  <source type="image/webp" srcset="./img/frame391.webp">
  <source type="image/png" srcset="./img/frame391.png">
  <img src="./img/frame391.png" alt="founder" class="image-scale">
</picture>
        <div class="container">
            <div class="founder-content-wrapper">
                <div class="founder-content contract-content">
                    <div class="separator"></div>
                    <h2 class="section-title contract-title">Контрактное производство автомобильной химии</h2>
                    <p class="founder-text">Прежде всего, начало повседневной работы по формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и будут описаны максимально подробно.
                    </p>
                    <p class="founder-text text-beta">
                      
Но социально-экономическое развитие напрямую зависит от поставленных обществом задач! Безусловно, постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в формировании своевременного выполнения сверхзадачи. А ещё элементы политического процесса представлены в исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.
                    </p>
                    <a href="./about.php" class="button-link mission">О нашей миссии</a>
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
     <section class="section founder about-lay-second prod-section">
            <picture  class="fi-alt">
              <source type="image/webp" srcset="./img/awoman.webp">
              <source type="image/jpeg" srcset="./img/awoman.png">
              <img src="./img/awoman.png" alt="founder" class="image-scale">
            </picture>
        <div class="container">
        <div class="founder-content-wrapper about-lay-wrapper">
            <div class="founder-content about-lay-content-second chem-production">
                <div class="separator"></div>
                <h2 class="section-title founder-title about-lay-title alt-alt">Изготовление автохимии</h2>
                <p class="founder-text">Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям. В своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поставленных обществом задач.</p>
                <ul class="clients-list clients-list-production">
                        <li class="clients-list-item">
                            <img src="./img/clients/him.svg" alt="logo" class="clients-image">
                            Полное описание товаров
                        </li>
                        <li class="clients-list-item">
                        <img src="./img/clients/car.svg" alt="logo" class="clients-image">
                          Актуальные цены
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/clients/him.svg" alt="logo" class="clients-image">
                            Полное описание товаров
                        </li>
                        <li class="clients-list-item">
                        <img src="./img/clients/car.svg" alt="logo" class="clients-image">
                           Актуальные цены
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/production/brush.svg" alt="logo" class="clients-image">
                         Лаки и краски
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/clients/him.svg" alt="logo" class="clients-image">
                         Химические производства
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/production/brush.svg" alt="logo" class="clients-image">
                         Лаки и краски
                        </li>
                        <li class="clients-list-item">
                            <img src="./img/clients/him.svg" alt="logo" class="clients-image">
                         Химические производства
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section types">
    <div class="founder-content-wrapper chem-lay-wrapper">
            <div class="founder-content type-content">
                <div class="separator"></div>
                <h2 class="section-title founder-title about-lay-title alt-alt">Виды автохимии</h2>
                <p class="founder-text type-text">Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям.</p>
                <ul class="clients-list clients-list-production-type">
                        <li class="clients-list-item type-list">
                        Антискотч
                        </li>
                        <li class="clients-list-item type-list">
                        Многоцелевая смазка
                        </li>
                        <li class="clients-list-item type-list">
                        Жидкий ключ
                        </li>
                        <li class="clients-list-item type-list">
                        Высокотемпературная смазка
                        </li>
                        <li class="clients-list-item type-list">
                        Универсальный очиститель деталей
                        </li>
                        <li class="clients-list-item type-list">
                        Силиконовая смазка
                        </li>
                        <li class="clients-list-item type-list">
                        Цепная смазка
                        </li>
                        <li class="clients-list-item type-list">
                        Медная смазка
                        </li>
                        <li class="clients-list-item type-list">
                        Графитовая смазка
                        </li>
                        <li class="clients-list-item type-list">
                        Очиститель кондиционера пенный
                        </li>
                        <li class="clients-list-item type-list">
                        Очиститель тормозных дисков
                        </li>
                        <li class="clients-list-item type-list">
                        Очиститель битумных пятен
                        </li>
                        <li class="clients-list-item type-list">
                        Очиститель кондционера
                        </li>
                        <li class="clients-list-item type-list">
                        Очиститель дросельной заслонки
                        </li>
                        <li class="clients-list-item type-list">
                        Очиститель обивки 
                        </li>
                        <li class="clients-list-item type-list">
                        Тефлоновая смазка
                        </li>
                        <li class="clients-list-item type-list">
                        Очиститель двигателя
                        </li>
                        <li class="clients-list-item type-list">
                        Универсальный очиститель
                        </li>
                        <li class="clients-list-item type-list">
                        Чернитель шин 
                        </li>
                        <li class="clients-list-item type-list">
                        Чернитель шин + очистка
                        </li>
                    </ul>
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
 <?php include_once('./templates/clients.php');?>
<section class="cta">
        <div class="bg-grey section-cta">
        <picture class="cta-image">
        <source type="image/webp" srcset="./img/__400-1.webp">
        <source type="image/png" srcset="./img/__400-1.png">
        <img src="./img/__400-1.png" alt="cta" class="image-scale">
        </picture>
            <div class="cta-form-wrapper container">
                <form action="./handler.php" class="cta-form">
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