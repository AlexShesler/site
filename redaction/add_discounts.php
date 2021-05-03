<?php
    require_once "lib/start.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>admin-панель</title>
        <meta charset="utf-8"/>        
        <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <div class="wrapper">
            <!--MENU-->
            <div class="nav_container">
                <?php
                    require_once "blocks/navigation.php";
                ?>
            </div>
            <!--CONTENT-->
            <div class="content">
               <form name="add_discounts" method="post" action="lib/discount.php">
                    <fieldset class="add">
                        <legend>Добавить скидки и акции</legend>
                        <input type="text" name="title" placeholder="название">
                        <input type="text" name="description" placeholder="описание">
                        <input type="submit" name="btn_addDiscounts" value="Добавить">
                    </fieldset>                    
                </form>
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