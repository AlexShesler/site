<div class="content_tbl clearfix">
    <div class="reg_form">
        <form name="reg" action="lib/reg.php" method="post">
            <fieldset class="reg">
                <legend>Регистрация</legend>
                <p><span>*</span>Имя, Отчество: <input type="text" name="name_reg" value="<?php echo $_SESSION['name_reg']?>" required></p>
                <p>Фамилия: <input type="text" name="last_name" value="<?php echo $_SESSION['last_name']?>"></p>
                <p><span>*</span>E-mail: <input type="email" name="email_reg" value="<?php echo $_SESSION['email_reg']?>" required></p>
                <p><span>**</span>Пароль: <input type="password" name="pass_1" required></p>
                <p><span>**</span>Повторите пароль: <input type="password" name="pass_2" required></p>
                <p class="captcha">
                    <img class="img_captcha_reg" src="lib/captcha.php" alt="Код">
                    <input class="captcha_input" type="text" name="captcha" placeholder="Введите код с картинки" required>
                </p>   
                <p class="remark"><span>*</span> Обязательно для заполнения. <span>**</span>Длинна пароля не менее 6 символов</p>
                <input type="submit" name="btn_reg" value="Зарегистрироваться">
            </fieldset>
        </form>
    </div>
    
    <div class="reg_description">
        <p>Являясь зарегистрированным пользователем интернет-магазина <b>calypso-krd.ru</b>, Вы получаете возможность использовать гибкую систему накопительных скидок. Несколько раз в месяц мы проводим фирменные акции и распродажи.
        </p>    
        <p>Все зарегистрированные пользователи будут получать своевременную информацию о поступлении новых товаров, скидках на товары и акциях, проводимых интернет-магазином <b>calypso-krd.ru</b>.
        </p> 
        <p>Если вы уже зарегистрированны, перейдите на форму <b><a onclick="auth_open()">входа в систему</a></b></p> 
    </div>
</div>