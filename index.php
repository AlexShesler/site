<?php
    require_once "lib/start.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Calypso - Ювелирная бижутерия - Краснодар</title>
        
<!--        <meta name=viewport content="width=device-width, initial-scale=1">-->
        <meta name="keywords" content="calypso, calipso, ювелирная бижутерия краснодар, бижутерия краснодар, магазин бижутерии, купить, серьги, браслеты, броши, кольца, сумки, часы, брэндовые, стильные украшения, интернет магазин, краснодар, ювелирная бижутерия, украшение, часы, аксессуар, доставка, браслет, сваровски, калипсо, калипсо крд, калипсо краснодар, броши, кошельки, клатчи, calypso-krd.ru">
        <meta name="description" content="Calypso - стильные аксессуары и бижутерия в Краснодаре! Самые популярные кольца, браслеты, серьги, сумки, женские и мужские часы.">
        <meta name="copyright" content="Все права защищены. © Calypso 2015">
        <meta http-equiv="content-language" content="ru">
        <meta charset="utf-8"/>
        
        <meta name='yandex-verification' content='46df9c8ebefb5b4d' />
        <meta name='wmail-verification' content='c2299e156d788cb17e88b60d2fa8a0cf' />
        <meta name="google-site-verification" content="Pu32UDafMRTLLAt8g18bY_NgpfxjtdE9JBMKkObCTow" />
        <meta name="google-site-verification" content="xB4iJn7OWg3Kzm4lOPQ3Ff5rcd-OMLVymqbUZN_fvWA" />
        <meta name='wmail-verification' content='e5c92087548af9e66370463464dfea15' />
        
        <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/slides.css">
        
        <script src="scripts/open_close.js"></script>
        <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
    </head>
    <body>
        <div class="wrapper">
            <?php
                include "blocks/ie_warning.php";
            ?>
            <!--HEADER-->
            <div class="header">
                <?php
                    require_once "blocks/header.php";
                ?>
            </div>
            <!--MENU-->
            <div class="nav_container">
                <?php
                    require_once "blocks/navigation.php";
                ?>
            </div>
            <!--CONTENT-->
            <div class="content">
                <?php
                    require_once "blocks/main_content.php";
                ?>
<!--
                <div>
                    //<?php
                      //  require_once "blocks/prefooter.php"
                    //?>
                </div>
-->
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