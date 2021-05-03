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
                <table class="tbl_list">
                        <tr>
                            <th>Номер заказа</th>
                            <th>Имя</th>
                            <th>Телефон</th>
                            <th>Комментарий</th>
                            <th>Артикул</th>
                            <th>Название</th>
                            <th>Колличество</th>
                            <th>Статус</th>
                        </tr>                    
                        <?php
                            $fast_orders = getAllFastOrdersAdmin();
                            for ($i = 0; $i < count($fast_orders); $i++){
                                $id_order = $fast_orders[$i]['id'];
                                $name = $fast_orders[$i]['name'];
                                $phone = $fast_orders[$i]['phone'];
                                $comment = $fast_orders[$i]['comment'];
                                $article = $fast_orders[$i]['article'];
                                $title = $fast_orders[$i]['title'];
                                $count = $fast_orders[$i]['count'];
                                $status = $fast_orders[$i]['status'];
                                
                                include "blocks/intro_fast_orders.php";
                            }
                        ?>
                    </table>
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