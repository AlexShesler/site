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
        <div class="wrapper_redaction">
            <!--MENU-->
            <div class="nav_container">
                <?php
                    require_once "blocks/navigation.php";
                ?>
            </div>
            <!--CONTENT-->
            <div class="content">
                <div class="list_of_items">
                    <table class="tbl_list">
                        <tr>
                            <th>Номер</th>
                            <th>Название</th>
                            <th>Артикул</th>
                            <th>Цена</th>
                            <th>Материал</th>
                            <th>Покрытие</th>
                            <th>Вставка</th>
                            <th>Комментарий</th>
                            <th>Скидка</th>
                            <th>Показывать</th>
                            <th>Новинка</th>
                        </tr>                    
                        <?php
                            $bags = getAllBagsAdmin();
                            for ($i = 0; $i < count($bags); $i++){
                                $id = $bags[$i]['id'];
                                $title = $bags[$i]['title'];
                                $article = $bags[$i]['article'];
                                $price = $bags[$i]['price'];
                                $coating = $bags[$i]['coating'];
                                $insertion= $bags[$i]['insertion'];
                                $material = $bags[$i]['material'];
                                $description = $bags[$i]['description'];
                                $discount = $bags[$i]['discount'];
                                $showround = $bags[$i]['showround'];
                                $new = $bags[$i]['new'];
                                $table = "bag";
                                
                                include "blocks/intro_edit_part.php";
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