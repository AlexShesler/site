<div class="wrapper_contacts clearfix">
    <div class="form_feedback">
<!--        <form name="feedback" action="lib/sendMessage.php" method="post">-->
           <form name="feedback" action="" method="post">
            <fieldset class="feedback">
                <legend class="feedback">Напишите нам</legend>
                <p>
                    <!--[if lt IE 10]><label>Ваше имя:</label><![endif]-->
                    <input type="text" name="fio" size="30" placeholder="Введите Ваше имя" value="<?php echo $_SESSION['fio']?>" required>
                </p>
                <p>
                    <!--[if lt IE 10]><label>Ваш e-mail:</label><![endif]-->
                    <input type="email" name="email_feed" size="30" placeholder="Введите Ваш e-mail" value="<?php echo $_SESSION['email_feed']?>" required>
                </p>    
                <p>
                    <!--[if lt IE 10]><label>Тема сообщения:</label><![endif]-->
                    <input type="text" name="subject" size="30" placeholder="Введите тему сообщения" value="<?php echo $_SESSION['subject']?>">
                </p>
                <!--[if lt IE 10]><label>Сообщение:</label><![endif]-->
                <p><textarea name="message" placeholder="Введите Ваше сообщение" rows="5" required><?php echo $_SESSION['message']?></textarea></p>
                <!--[if lt IE 10]><label>Введите код</label><![endif]-->
                <p class="captcha">
                    <img class="contacts_cap_img" src="lib/captcha.php" alt="Код">
                    <input class="captcha_input" type="text" name="captcha" placeholder="Введите код с картинки" required>
                </p>                  
                <input type="submit" name="btn_msg" value="Отправить">
            </fieldset>
        </form>        
    </div>
    <div class="contacts">
        <div class="address clearfix">
            <img class="contacts_img" src="../images/icon_contacts/icon-address.png">
            <div class="contacts_text">
                <h2>Наш адрес:</h2>
                <span>г.Краснодар</span>
            </div>
        </div>
        <div class="phones clearfix">
            <img class="contacts_img" src="../images/icon_contacts/icon-phone.png">
            <div class="contacts_text">
                <h2>Наши телефоны:</h2>
                <span>+7 (918) 606-25-90</span>
            </div>
        </div>
        <div class="email clearfix">
            <img class="contacts_img" src="../images/icon_contacts/icon-email.png">
            <div class="contacts_text">
                <h2>Наша почта:</h2>
                <a href="mailto:calypso-krd@mail.ru">calypso.krd@gmail.com</a>
            </div>
        </div>
        <div class="whatsapp_viber clearfix">
            <img class="contacts_img" src="../images/icon_contacts/icon-viber-whatsapp.gif">
            <div class="contacts_text">
                <h2>Whatsapp/Viber:</h2>
                <span>+7 (918) 606-25-90</span>
            </div>
        </div>
        <div class="timetable clearfix">
            <img class="contacts_img" src="../images/icon_contacts/icon-working-hours.png">
            <div class="contacts_text">
                <h2>Мы работаем</h2>
                <span>ежедневно с 10:00 до 20:00</span>
            </div>
        </div>
        <div class="instagram clearfix">
            <img class="contacts_img" src="../images/icon_contacts/insta.png">
            <div class="contacts_text">
                <h2>Instagram</h2>
                <a target="_blank" href="http://instagram.com/calypso_accessories">instagram.com/calypso_accessories</a>
            </div>
        </div>
        <div class="vk">
            <img class="contacts_img clearfix" src="../images/icon_contacts/icon-vkontakte.png">
            <div class="contacts_text">
                <h2>ВКонтакте</h2>
                <a target="_blank" href="http://vk.com/club75666612">http://vk.com/club75666612</a>
            </div>
        </div>
    </div>
</div>
