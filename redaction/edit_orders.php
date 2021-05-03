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
                            <th>Фамилия</th>
                            <th>E-mail</th>
                            <th>Телефон</th>
                            <th>Заказ</th>
                            <th>Сумма</th>
                            <th>Почтовый код</th>
                            <th>Статус</th>
                        </tr>                    
                        <?php
                            $orders = getAllOrdersAdmin();
                            for ($i = 0; $i < count($orders); $i++){
                                $id_order = $orders[$i]['id'];
                                $first_name = $orders[$i]['first_name'];
                                $last_name = $orders[$i]['last_name'];
                                $email = $orders[$i]['email'];
                                $phone = $orders[$i]['phone'];
                                $order = $orders[$i]['order'];
                                $summ_price = $orders[$i]['summ_price'];
                                $tracking_code = $orders[$i]['tracking_code'];
                                $status = $orders[$i]['status'];
                                
                                include "blocks/intro_orders.php";
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