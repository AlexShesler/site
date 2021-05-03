<div class="content_tbl clearfix">
    <form name="placeOrder" method="post" action="lib/save_place_order.php">
        <p>
            <input type="text" name="first_name" value="<?php echo $_SESSION['first_name'];?>" pattern="[A-Za-zА-Яа-яЁё]{1,30}" required>
            <label>*Фамилия</label>            
        </p>
        <p>
            <input type="text" name="last_name" pattern="[A-Za-zА-Яа-яЁё]{1,30}" required value="<?php
                                                                    if (isset($_SESSION['name'])) echo $_SESSION['name'];
                                                                    else echo $_SESSION['last_name'];
                                                                ?>">
            <label>*Имя</label>            
        </p>
        <p>
            <input type="email" name="email" value="<?php
                                                        if (isset($_SESSION['email'])) echo $_SESSION['email'];
                                                        else echo $_SESSION['email'];
                                                    ?>">
            <label>E-mail</label>
        </p>
        <p>
            <input type="text" name="phone" value="<?php echo $_SESSION['phone'];?>" pattern="[0-9]{1,15}" required>
            <label>*Телефон(89881234567)</label>
        </p>
        <p>
            <input type="text" name="index" value="<?php echo $_SESSION['index'];?>" pattern="[0-9]{6}" required>
            <label>*Индекс</label>
        </p>
        <p>
            <select name="zone_id" required>
                <?php
                    if (isset($_SESSION['zone_id'])) 
                        echo '<option value="'.$_SESSION['zone_id'].'" selected>'.$_SESSION['zone_id'].'</option>';
                ?>
                    <option value=""> --- Выберите --- </option>
                    <option value="Алтайский край">Алтайский край</option>
                    <option value="Амурская область">Амурская область</option>
                    <option value="Архангельская область">Архангельская область</option>
                    <option value="Астраханская область">Астраханская область</option>
                    <option value="Белгородская область">Белгородская область</option>
                    <option value="Брянская область">Брянская область</option>
                    <option value="Владимирская область">Владимирская область</option>
                    <option value="Волгоградская область">Волгоградская область</option>
                    <option value="Вологодская область">Вологодская область</option>
                    <option value="Воронежская область">Воронежская область</option>
                    <option value="Еврейская АО">Еврейская АО</option>
                    <option value="Забайкальский край">Забайкальский край</option>
                    <option value="Ивановская область">Ивановская область</option>
                    <option value="Иркутская область">Иркутская область</option>
                    <option value="Калининградская область">Калининградская область</option>
                    <option value="Калужская область">Калужская область</option>
                    <option value="Камчатский край">Камчатский край</option>
                    <option value="Карачаево-Черкеcсия">Карачаево-Черкеcсия</option>
                    <option value="Кемеровская область">Кемеровская область</option>
                    <option value="Кировская область">Кировская область</option>
                    <option value="Костромская область">Костромская область</option>
                    <option value="Краснодарский край">Краснодарский край</option>
                    <option value="Красноярский край">Красноярский край</option>
                    <option value="Курганская область">Курганская область</option>
                    <option value="Курская область">Курская область</option>
                    <option value="Ленинградская область">Ленинградская область</option>
                    <option value="Липецкая область">Липецкая область</option>
                    <option value="Магаданская область">Магаданская область</option>
                    <option value="Москва">Москва</option>
                    <option value="Московская область">Московская область</option>
                    <option value="Мурманская область">Мурманская область</option>
                    <option value="Ненецкий АО">Ненецкий АО</option>
                    <option value="Нижегородская область">Нижегородская область</option>
                    <option value="Новгородская область">Новгородская область</option>
                    <option value="Новосибирская область">Новосибирская область</option>
                    <option value="Омская область">Омская область</option>
                    <option value="Оренбургская область">Оренбургская область</option>
                    <option value="Орловская область">Орловская область</option>
                    <option value="Пензенская область">Пензенская область</option>
                    <option value="Пермский край">Пермский край</option>
                    <option value="Приморский край">Приморский край</option>
                    <option value="Псковская область">Псковская область</option>
                    <option value="Республика Адыгея">Республика Адыгея</option>
                    <option value="Республика Алтай">Республика Алтай</option>
                    <option value="Республика Башкортостан">Республика Башкортостан</option>
                    <option value="Республика Бурятия">Республика Бурятия</option>
                    <option value="Республика Дагестан">Республика Дагестан</option>
                    <option value="Республика Ингушетия">Республика Ингушетия</option>
                    <option value="Республика Кабардино-Балкария">Республика Кабардино-Балкария</option>
                    <option value="Республика Калмыкия">Республика Калмыкия</option>
                    <option value="Республика Карелия">Республика Карелия</option>
                    <option value="Республика Коми">Республика Коми</option>
                    <option value="Республика Марий Эл">Республика Марий Эл</option>
                    <option value="Республика Мордовия">Республика Мордовия</option>
                    <option value="Республика Саха">Республика Саха</option>
                    <option value="Республика Северная Осетия">Республика Северная Осетия</option>
                    <option value="Республика Татарстан">Республика Татарстан</option>
                    <option value="Республика Тыва">Республика Тыва</option>
                    <option value="Республика Хакасия">Республика Хакасия</option>
                    <option value="Ростовская область">Ростовская область</option>
                    <option value="Рязанская область">Рязанская область</option>
                    <option value="Самарская область">Самарская область</option>
                    <option value="Санкт-Петербург">Санкт-Петербург</option>
                    <option value="Саратовская область">Саратовская область</option>
                    <option value="Сахалинская область">Сахалинская область</option>
                    <option value="Свердловская область">Свердловская область</option>
                    <option value="Смоленская область">Смоленская область</option>
                    <option value="Ставропольский край">Ставропольский край</option>
                    <option value="Тамбовская область">Тамбовская область</option>
                    <option value="Тверская область">Тверская область</option>
                    <option value="Томская область">Томская область</option>
                    <option value="Тульская область">Тульская область</option>
                    <option value="Тюменская область">Тюменская область</option>
                    <option value="Удмуртская Республика">Удмуртская Республика</option>
                    <option value="Ульяновская область">Ульяновская область</option>
                    <option value="Хабаровский край">Хабаровский край</option>
                    <option value="Ханты-Мансийский АО - Югра">Ханты-Мансийский АО - Югра</option>
                    <option value="Челябинская область">Челябинская область</option>
                    <option value="Чеченская Республика">Чеченская Республика</option>
                    <option value="Чувашская Республика">Чувашская Республика</option>
                    <option value="Чукотский АО">Чукотский АО</option>
                    <option value="Ямало-Ненецкий АО">Ямало-Ненецкий АО</option>
                    <option value="Ярославская область">Ярославская область</option>
                </select>
            <label>*Регион/Область</label>
        </p>
        <p>
            <input type="text" name="town" value="<?php echo $_SESSION['town'];?>" pattern="[A-Za-zА-Яа-яЁё0-9]{1,30}" required>
            <label>*Город</label>
        </p>
        <p>
            <input type="text" name="street" value="<?php echo $_SESSION['street'];?>" pattern="[A-Za-zА-Яа-яЁё0-9]{1,30}" required>
            <label>*Улица</label>
        </p>
        <p>
            <input type="text" name="house" value="<?php echo $_SESSION['house'];?>" pattern="[A-Za-zА-Яа-яЁё0-9]{1,30}" required>
            <label>*Номер дома/корпус</label>
        </p>
        <p>
            <input type="text" name="flat" value="<?php echo $_SESSION['flat'];?>" pattern="[0-9]{1,5}">
            <label>Квартира</label>
        </p>
        <p class="captcha">
            <img class="captcha_img" src="lib/captcha.php" alt="Код">
            <input class="captcha_input_order" type="text" name="captcha" required>
            <label class="captcha_label">*Введите код</label>
        </p>
        <input class="placeOrderBtn" type="submit" name="btn_placeOrder" value="Оформить">
    </form>
    <div class="placeOrdetDescription left clearfix">
            <p>Поля помеченные * обязательны для заполнения. После оформления заказа на сайте с Вами свяжется наш менеджер для уточнения деталей заказа и доставки. Если вы зарегистрированный пользователь нашего магазина то вы сможете отслеживать статус Вашего заказа в <a href="private_office.php">Личном кабинете</a>.<br/> После заполнения всех полей нажмите кнопку <a class="button">Оформить</a> Указывайте настоящие телефон и адрес электронной почты иначе мы не сможем уведомить вас о статусе вашего заказа или уточнить, в случае необходимости, ваши данные для доставки заказанного товара.</p>
        </div>
</div>