<?php
    require_once "lib/start.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Calypso - Сумки</title>
        
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
                    require_once "blocks/bags_content.php";
                ?>
                <div class="pagination">
                    <?php echo pagination(getNumOfPage('bags'), 'bags'); ?>
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