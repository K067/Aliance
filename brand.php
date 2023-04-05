<?php 
$page_title='Собственные торговые марки';
$header_style='bg-grey';
include_once('header.php');?>
<?php include_once('./templates/tradebrand.php');?>

<section class="cta cta-alt">
        <div class="bg-grey section-cta research-section">
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
