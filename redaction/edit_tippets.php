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
                            <th>Состав</th>
                            <th>Размер</th>
                            <th>Комментарий</th>
                            <th>Скидка</th>
                            <th>Показывать</th>
                            <th>Новинка</th>
                        </tr>                    
                        <?php
                            $tippets = getAllTippetsAdmin();
                            for ($i = 0; $i < count($tippets); $i++){
                                $id = $tippets[$i]['id'];
                                $title = $tippets[$i]['title'];
                                $article = $tippets[$i]['article'];
                                $price = $tippets[$i]['price'];
                                $material = $tippets[$i]['material'];
                                $sizes= $tippets[$i]['sizes'];
                                $description = $tippets[$i]['description'];
                                $discount = $tippets[$i]['discount'];
                                $showround = $tippets[$i]['showround'];
                                $new = $tippets[$i]['new'];
                                $table = "tippet";
                                
                                include "blocks/intro_edit_tippet.php";
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