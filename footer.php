<section class="cta">
        <div class="bg-grey section-cta">
            <img src="./img/__400 1.png" alt="cta" class="cta-image">
            <div class="cta-form-wrapper container">
                <form action="/handler.php" method="POST" class="cta-form">
                    <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
                    <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит
                        на все
                        интересующие вопросы и поможем даже в самых сложных случаях!</p>
                    <div class="input-group-wrapper">
                        <div class="input-group">
                            <input id="user-name" type="text" class="input" name="username" placeholder=" " maxlength="100" required>
                            <label for="user-name" class="label">Имя</label>
                        </div>
                        <div class="input-group">
                            <input id="user-phone" type="tel" class="input" name="userphone" placeholder=" " required>
                            <label for="user-phone" class="label">Номер телефона</label>
                        </div>
                    </div>
                    <div class="cta-form-footer">
                        <button type="submit" class="button cta-form-button">Отправить заявку</button>
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
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <img src="./img/logo-dark.svg" alt="Aliance Production" class="logo-footer">
                <a href="tel:+78006861014" class="footer-phone">
                    +7 (800) 686-10-14
                </a>
                <div class="footer-info">
                    <img src="./img/local.svg" alt="local" class="location-mark">
                    <address class="footer-info-property">г. Москва, Холодильный пер. 4к1с8</address>
                </div>
                <div class="footer-info">
                    <img src="./img/mail.svg" alt="local" class="location-mark">
                    <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-property">a.dragunov@tdaliance.ru</a>
                </div>
                <div class="footer-social">
                    <a href="#" class="footer-social-link">
                        <img src="./img/vk.svg" alt="social-media" class="footer-social-icon">
                    </a>
                    <a href="#" class="footer-social-link">
                        <img src="./img/inst.svg" alt="social-media" class="footer-social-icon">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-separator"></div>
        <div class="container">
            <div class="footer-bottom">
                <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Контрактное производство</h2>
                    <ul class="footer-menu-list footer-menu-columns">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">
                                Автомобильная химия
                            </a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">
                                Бытовая химия
                            </a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">
                                Дезинфицирующие средства
                            </a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">
                                Пищевые аэрозоли
                            </a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">
                                Косметическая продукция
                            </a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">
                                Краски аэрозольные
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Собственные марки</h2>
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">
                                Автохимия AG-Tech
                            </a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">
                                Автохимия AP
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-menu-wrapper">
                    <ul class="footer-menu-list bold-list">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link-bold">
                                О компании
                            </a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link-bold">
                                Новости
                            </a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link-bold">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-separator"></div>
        <div class="container">
            <div class="footer-wrapper">
                <div class="footer-legal">
                    <p class="copyright">&copy
                        <?php echo date("Y")?> «Aliance Production». Все права защищены.
                    </p>
                    <a href="#" class="policy">Политики конфиденциальности</a>
                </div>
                <div class="footer-author">
                    <span class="made-in">Сделано в</span>
                    <img src="./img/Group 48.svg" alt="made-in-logo" class="made-in-logo">
                </div>
            </div>
        </div>
    </footer>