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
                            <th>номер</th>
                            <th>название</th>
                            <th>артикул</th>
                            <th>цена</th>
                            <th>покрытие</th>
                            <th>вставка</th>
                            <th>материал</th>
                            <th>размеры</th>
                            <th>комментарий</th>
                            <th>Скидка</th>
                            <th>показывать</th>
                            <th>новинка</th>
                        </tr>                    
                        <?php
                            $hairs = getAllHairsAdmin();
                            for ($i = 0; $i < count($hairs); $i++){
                                $id = $hairs[$i]['id'];
                                $title = $hairs[$i]['title'];
                                $article = $hairs[$i]['article'];
                                $price = $hairs[$i]['price'];
                                $coating = $hairs[$i]['coating'];
                                $insertion= $hairs[$i]['insertion'];
                                $material = $hairs[$i]['material'];
                                $description = $hairs[$i]['description'];
                                $discount = $hairs[$i]['discount'];
                                $showround = $hairs[$i]['showround'];
                                $new = $hairs[$i]['new'];
                                $table = "hair";
                                
                                include "blocks/intro_edit_full.php";
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