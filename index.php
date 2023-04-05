<!DOCTYPE html>
<html lang="ru">

<head>
    <script src="./js/swiper-bundle.min.js" defer></script>
    <script src="./js/just-validate.production.min.js" defer></script>
    <script src="./js/unversalMegaScript.js" defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Aliance Production</title>
</head>

<body>
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item">
                <a href="./about.php" class="mobile-menu-link">О компании</a>
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
    <header class="header header-image">
        <div class="container">
            <div class="header-content">
                <div class="separator"></div>
                <h1 class="header-title">Комплексное обеспечение товарами и расходными материалами бизнеса</h1>
                <p class="header-text">Высокий уровень вовлечения представителей целевой аудитории является четким
                    доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от
                    анализа существующих паттернов поведения.</p>
                <div class="header-button button modal-button">Подробнее о компании</div>
            </div>
            <div class="swiper slider-features">
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

        </div>
    </header>
 <?php include_once('./templates/schem.php')?>
 <section class="section production">
        <div class="container">
            <div class="separator"></div>
            <h2 class="section-title second">Контрактное производство</h2>
            <div class="cards">
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Автомобильная химия</h3>
                        <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение
                            форм
                            воздействия.</p>
                    </div>
                    <picture class="card-image">
                    <source type="image/webp" srcset="./img/avto-him.webp">
                    <source type="image/png" srcset="./img/avto-him.png">
                    <img src="./img/avto-him.png" alt="Автомобильная химия" class="image-scale">
                    </picture>
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Бытовая химия</h3>
                        <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии
                            функционально разнесены на независимые элементы.</p>
                    </div>
                    <picture class="card-image">
                    <source type="image/webp" srcset="./img/bit-him.webp">
                    <source type="image/png" srcset="./img/bit-him.png">
                    <img src="./img/bit-him.png" alt="Бытовая химия" class="image-scale">
                    </picture>
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Дезинфицирующие средства</h3>
                        <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
                    </div>
                    <picture class="card-image">
                    <source type="image/webp" srcset="./img/dezinfect.webp">
                    <source type="image/png" srcset="./img/dezinfect.png">
                    <img src="./img/dezinfect.png" alt="Дезинфицирующие средства" class="image-scale">
                    </picture>
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Пищевые аэрозоли</h3>
                        <p class="card-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение
                            форм
                            воздействия.</p>
                    </div>
                    <picture class="card-image">
                    <source type="image/webp" srcset="./img/dezinfect-1.webp">
                    <source type="image/png" srcset="./img/dezinfect-1.png">
                    <img src="./img/dezinfect-1.png" alt="Пищевые аэрозоли" class="image-scale">
                    </picture>
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Косметическая продукция</h3>
                        <p class="card-text">Лишь интерактивные прототипы призваны к ответу.</p>
                    </div>
                    <picture class="card-image">
                    <source type="image/webp" srcset="./img/avto-him-1.webp">
                    <source type="image/png" srcset="./img/avto-him-1.png">
                    <img src="./img/avto-him-1.png" alt="Косметическая продукция" class="image-scale">
                    </picture>
                </a>
                <a href="#" class="card">
                    <div class="card-content">
                        <h3 class="card-title">Краски аэрозольные</h3>
                        <p class="card-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии
                            функционально разнесены на независимые элементы.</p>
                    </div>
                    <picture class="card-image">
                    <source type="image/webp" srcset="./img/bit-him-1.webp">
                    <source type="image/png" srcset="./img/bit-him-1.png">
                    <img src="./img/bit-him-1.png" alt="Краски аэрозольные" class="image-scale">
                    </picture>
                </a>
            </div>
        </div>
    </section>
 <?php $block_title="Собственные торговые марки"; include_once('./templates/tradebrand.php')?>
 <section class="section founder">
<picture class="founder-image">
  <source type="image/webp" srcset="./img/pexels-tiger-lily-44839381.webp">
  <source type="image/png" srcset="./img/pexels-tiger-lily-44839381.png">
  <img src="./img/pexels-tiger-lily-44839381.png" alt="founder" class="image-scale">
</picture>
        <div class="container">
            <div class="founder-content-wrapper">
                <div class="founder-content">
                    <div class="separator"></div>
                    <h2 class="section-title founder-title">Отношение к делу и к клиентам</h2>
                    <p class="founder-text">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная
                        практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях
                        соответствующих условий активизации. Внезапно, независимые государства, которые представляют
                        собой
                        яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой
                        серии
                        независимых исследований. С учётом сложившейся международной обстановки, синтетическое
                        тестирование
                        выявляет срочную потребность системы массового участия.
                    </p>
                    <p class="founder-text text-beta">
                        А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
                        ситуацию, в
                        равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами
                        инновационный путь в значительной степени обусловливает важность дальнейших направлений
                        развития.
                    </p>
                    <a href="./about.php" class="button-link">Подробнее о компании</a>
                </div>
            </div>
        </div>
    </section>
 <?php include_once('./templates/clients.php')?>
    <section class="section blog">
        <div class="container">
            <div class="separator"></div>
            <h2 class="section-title">Блог экспертов в области производства</h2>
            <div class="swiper slider-blog">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide blog-card">
                    <picture class="blog-image">
                    <source type="image/webp" srcset="./img/pexels-tima-miroshnichenko-9574410-2.webp">
                    <source type="image/png" srcset="./img/pexels-tima-miroshnichenko-9574410-2.png">
                    <img src="./img/pexels-tima-miroshnichenko-9574410-2.png" alt="blog" class="image-scale">
                    </picture>
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую
                            экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                    <picture class="blog-image">
                    <source type="image/webp" srcset="./img/pexels-pixabay-2086611.webp">
                    <source type="image/png" srcset="./img/pexels-pixabay-2086611.png">
                    <img src="./img/pexels-pixabay-2086611.png" alt="blog" class="image-scale">
                    </picture>
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально
                            разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                    <picture class="blog-image">
                    <source type="image/webp" srcset="./img/pexels-tima-miroshnichenko-9574410-2.webp">
                    <source type="image/png" srcset="./img/pexels-tima-miroshnichenko-9574410-2.png">
                    <img src="./img/pexels-tima-miroshnichenko-9574410-2.png" alt="blog" class="image-scale">
                    </picture>
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую
                            экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                    <picture class="blog-image">
                    <source type="image/webp" srcset="./img/pexels-pixabay-2086611.webp">
                    <source type="image/png" srcset="./img/pexels-pixabay-2086611.png">
                    <img src="./img/pexels-pixabay-2086611.png" alt="blog" class="image-scale">
                    </picture>
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально
                            разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                </div>
                <div class="blog-slider-footer">
                    <a href="#" class="button-link blog-link">Весь блог</a>
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