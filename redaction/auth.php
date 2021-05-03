<?php
    session_start();
    require_once "../lib/functions.php";
    
    if (checkUser($_SESSION["email"], $_SESSION["password"])){
        header("Location: /index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Авторизация</title>
        
        <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <div class="wrapper">
            <!--HEADER-->
            <div class="header">
                <?php
//                    require_once "../blocks/header.php";
                ?>
            </div>
            <!--MENU-->
            <div class="nav_container">
                <?php
//                    require_once "../blocks/navigation.php";
                ?>
            </div>
            <!--CONTENT-->
            <div class="content">
                <div class="redaction_auth">
                    <?php
                        if ($_SESSION["error_auth"] == 1)
                            echo "Не верно введен пароль и/или логин";
                    ?>
                    <form name="auth_admin" method="post" action="../lib/auth.php">
                        <input type="email" name="email" placeholder="Логин">
                        <input type="password" name="password" placeholder="Пароль">
                        <input type="submit" name="btn_auth_admin" value="Войти">
                    </form>                
                </div>                
            </div>
            <!--FOOTER-->
            <div class="footer">
                <?php
                    require_once "blocks/footer.php";
                ?>
            </div>
        </div>
    </body>
</html>