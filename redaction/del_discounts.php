<?php
    require_once "lib/start.php";
    require_once "lib/function.php";
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
                <div class="form_del">
                    <form name="del_discounts" method="post" action="lib/discount.php">
                        <fieldset class="add">
                            <legend>Удалить скидки и акции</legend>
                            <input type="text" name="id" placeholder="номер">
                            <input type="submit" name="btn_delDiscount" value="Удалить">
                        </fieldset>                    
                    </form>
                </div>
                <div class="list_of_items">
                    <table class="tbl_list">
                        <tr>
                            <th>номер</th>
                            <th>название</th>
                            <th>описание</th>
                        </tr>
                        <?php
                            $discounts = getAllDiscountsAdmin();
                            for ($i = 0; $i < count($discounts); $i++){
                                $id = $discounts[$i]["id"];
                                $title = $discounts[$i]["title"];
                                $description = $discounts[$i]["description"];
                                include "blocks/intro_discounts.php";
                            }
                        ?>
                    </table>
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