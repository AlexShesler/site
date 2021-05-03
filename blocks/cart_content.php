<div class="content_tbl">
    <table class="tbl_cart">
        <tr>
            <th>Фото</th>
            <th>Название</th>
            <th>Колличество</th>
            <th>Цена</th>
            <th>Итого</th>
        </tr>
        <?php
            if ($_SESSION['prod_count'] > 0){
                for ($i = 0; $i < $_SESSION['prod_count']; $i++) {
                /* получаем информацию о товаре из базы данных */
    //                getAllForCart($_SESSION['id'][$i], $_SESSION['table'][$i]);
                    global $mysqli;
                    connectDB();
                    $table = $_SESSION['table'][$i]."s";
                    $result_set = $mysqli->query("SELECT * FROM `$table` WHERE id='".$_SESSION['id'][$i]."'");
                    closeDB();
                    $prod_in_cart = $result_set->fetch_assoc();
                    $_SESSION['article'][$i] = $prod_in_cart['article'];
                    include "intro_cart.php";
                }
            }
            else include "blocks/empty_cart.php";            
        ?>
        <tr>
            <td colspan="4" class="text_right"><span>Всего товаров:</span></td>
            <td><?php echo $_SESSION['prod_col'];?></td>
        </tr>
        <tr>
            <td colspan="4" class="text_right"><span>Сумма к оплате:</span></td>
            <td><?php echo $_SESSION['summPrice'];?></td>
        </tr>
    </table>
    <div class="cart_description">
        <p>Что бы оформить заказ нажмите "Далее". Если Вы хотите изменить колличество товаров введите в поле напротив названия товара нужное колличество и нажмите "Применить" <input name="update" type="submit" value="" title="Применить" />. Если хотите удалить товар из корзины нажмите "Удалить" <input name="del" type="submit" value="" title="Удалить" /></p>
    </div>
    <?php
        if ($_SESSION['prod_count'] != 0){
            include "blocks/next.php";
        }
    ?>
</div>