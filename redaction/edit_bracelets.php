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
                            $bracelets = getAllBraceletsAdmin();
                            for ($i = 0; $i < count($bracelets); $i++){
                                $id = $bracelets[$i]['id'];
                                $title = $bracelets[$i]['title'];
                                $article = $bracelets[$i]['article'];
                                $price = $bracelets[$i]['price'];
                                $coating = $bracelets[$i]['coating'];
                                $insertion= $bracelets[$i]['insertion'];
                                $material = $bracelets[$i]['material'];
                                $description = $bracelets[$i]['description'];
                                $discount = $bracelets[$i]['discount'];
                                $showround = $bracelets[$i]['showround'];
                                $new = $bracelets[$i]['new'];
                                $table = "bracelet";
                                
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