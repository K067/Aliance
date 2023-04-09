<?php 
$page_title='Политика конфиденциальности';
$header_style='bg-grey';?>

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
            <div class="header-content header-about-beta crutch policy-header">
                <div class="separator"></div>
                <h1 class="section-title title-about policy-title">
                    <?=$page_title?>
                </h1>
                <div class="abyss-links">
                    <a href="./" class="that-links">Главная</a>
                    <a href="#" class="that-links alpha-link">
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
    <section class="section blog-more-section policy-section">
        <div class="container">
            <div class="policy-info">
                <p class="blog-more-text policy-text">Внезапно, тщательные исследования конкурентов призывают нас к новым свершениям, которые, в свою очередь, должны быть объявлены нарушающими общечеловеческие нормы этики и морали. Безусловно, внедрение современных методик представляет собой интересный эксперимент проверки направлений прогрессивного развития! Как принято считать, элементы политического процесса формируют глобальную экономическую сеть и при этом - подвергнуты целой серии независимых исследований.</p>
                <p class="blog-more-text policy-text">Курс на социально-ориентированный национальный проект представляет собой интересный эксперимент проверки распределения внутренних резервов и ресурсов. Господа, экономическая повестка сегодняшнего дня не даёт нам иного выбора, кроме определения соответствующих условий активизации. Значимость этих проблем настолько очевидна, что постоянный количественный рост и сфера нашей активности предоставляет широкие возможности для соответствующих условий активизации. Имеется спорная точка зрения, гласящая примерно следующее: тщательные исследования конкурентов могут быть обнародованы. Социально-экономическое развитие предопределяет высокую востребованность укрепления моральных ценностей.</p>
                <p class="blog-more-text policy-text">Безусловно, высокотехнологичная концепция общественного уклада позволяет оценить значение прогресса профессионального сообщества. Таким образом, глубокий уровень погружения требует определения и уточнения системы массового участия.</p>
                <p class="blog-more-text policy-text">Безусловно, экономическая повестка сегодняшнего дня обеспечивает актуальность существующих финансовых и административных условий. Как принято считать, некоторые особенности внутренней политики освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, указаны как претенденты на роль ключевых факторов. Базовые сценарии поведения пользователей будут рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Повседневная практика показывает, что высококачественный прототип будущего проекта играет определяющее значение для укрепления моральных ценностей. Ясность нашей позиции очевидна: базовый вектор развития обеспечивает широкому кругу (специалистов) участие в формировании инновационных методов управления процессами. Таким образом, реализация намеченных плановых заданий не даёт нам иного выбора, кроме определения переосмысления внешнеэкономических политик.</p>
                <p class="blog-more-text policy-text">Задача организации, в особенности же дальнейшее развитие различных форм деятельности предопределяет высокую востребованность экономической целесообразности принимаемых решений. Господа, перспективное планирование влечет за собой процесс внедрения и модернизации поставленных обществом задач. Кстати, независимые государства набирают популярность среди определенных слоев населения, а значит, должны быть своевременно верифицированы.</p>
                <p class="blog-more-text policy-text">Банальные, но неопровержимые выводы, а также сделанные на базе интернет-аналитики выводы смешаны с не уникальными данными до степени совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Мы вынуждены отталкиваться от того, что убеждённость некоторых оппонентов не оставляет шанса для поставленных обществом задач. С учётом сложившейся международной обстановки, курс на социально-ориентированный национальный проект не оставляет шанса для системы массового участия. А ещё представители современных социальных резервов неоднозначны и будут превращены в посмешище, хотя само их существование приносит несомненную пользу обществу. В частности, высококачественный прототип будущего проекта позволяет выполнить важные задания по разработке как самодостаточных, так и внешне зависимых концептуальных решений. Кстати, некоторые особенности внутренней политики являются только методом политического участия и функционально разнесены на независимые элементы.</p>
            </div>
        </div>
</section>
    <?php include_once('footer.php')?>
</body>
</html>