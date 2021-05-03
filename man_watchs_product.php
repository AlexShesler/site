<?php
    require_once "lib/start.php";
    $watches_man = getWatchesMan(intval($_GET["id"]));
    $id = $watches_man["id"];
    $title = $watches_man["title"];
    $article = $watches_man["article"];
    $price = $watches_man["price"];
    $mechanism = $watches_man["mechanism"];
    $strap_material = $watches_man["strap_material"];
    $body_material = $watches_man["body_material"];
    $description = $watches_man["description"];
    $discount = $watches_man["discount"];
    $table = 'man_watch';
?>
<!--Карточка товара-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title?></title>
        
        <meta http-equiv="KEYWORDS" content="ювелирная бижутерия краснодар купить серьги браслеты броши кольца сумки часы брэндовые стильные украшения"/>
        <meta http-equiv="DESCRIPTION" content="ювелирная бижутерия краснодар"/>
        <meta charset="utf-8"/>
        
        <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/main.css">
        <script src="scripts/open_close.js"></script>
    </head>
    <body>
        <div class="wrapper">
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
                    require_once "blocks/zoom_image.php";
                    require_once "blocks/watches_man.php";
                ?>
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