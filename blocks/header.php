<?php
    if ($_SESSION["error_auth"]){
        unset($_SESSION["error_auth"]);
        $alert = "Неверные e-mail и/или пароль!";
        include "lib/alert.php";
    }
?>
<a class="header_a" href="index.php" hreflang="ru"><h1 id="header_text">Calypso</h1></a>
<h3 id="header_slogan">украшения, создающие стиль</h3>

<div class="search">
    <form name="search" action="search.php" method="get">
        <input type="search" name="words" placeholder="Поиск">
        <input type="submit" name="btn_search" value="">
    </form>    
</div>
<div class="wrap_contacts_cart_login">
    <div class="header_contacts">
        <div class="images_contact">
            <img alt="Инстаграм" class="header_img" src="../images/icon_contacts/instagram_header.png">
            <img alt="whatsappviber" class="header_img" src="../images/icon_contacts/icon-viber-whatsapp.gif">
        </div>
        <div class="phones_contact">     
            <span><a target="_blank" href="http://instagram.com/calypso_accessories">Instagram</a></span>
            <span>+7 (918) 606-25-90</span>
        </div>
    </div>
    <!--Корзина-->
    <div class="cart">
        <img alt="Корзина" src="images/cart.png">
        <span><b>Товаров:</b> <?php
                                if ($_SESSION['prod_col'] == 0)
                                    echo "0";
                                else echo $_SESSION['prod_col'];?> шт.
        </span><br/>
        <span><b>На сумму:</b> <?php
                                if ($_SESSION['summPrice'] == 0)
                                    echo "0";
                                else echo $_SESSION['summPrice'];
                            ?> руб.
        </span><br/>
        <a href="cart.php">В корзину</a>
        <a href="clear_cart.php">Очистить</a>
        
    </div>
    <div class="login">
        <?php
            if (checkUser($_SESSION["email"], $_SESSION["password"]))
                require_once "blocks/user_panel.php";
            else require_once "blocks/login_reg_link.php";
        ?>    
    </div>
</div>
<!--Форма авторизации-->
<div class="auth_form" id="auth">
    <button class="btn_close" onclick="auth_close()"></button>
    <form name="auth" action="lib/auth.php" method="post">
        <label>Логин(email)</label><br/>
        <input type="email" name="email" required><br/>
        <label>Пароль</label><br/>
        <input type="password" name="password" required><br/>
        <input type="submit" name="btn_auth" value="Войти">
    </form>
</div>