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
                            $beads = getAllBeads();
                            for ($i = 0; $i < count($beads); $i++){
                                $id = $beads[$i]['id'];
                                $title = $beads[$i]['title'];
                                $article = $beads[$i]['article'];
                                $price = $beads[$i]['price'];
                                $coating = $beads[$i]['coating'];
                                $insertion= $beads[$i]['insertion'];
                                $material = $beads[$i]['material'];
                                $description = $beads[$i]['description'];
                                $discount = $beads[$i]['discount'];
                                $showround = $beads[$i]['showround'];
                                $new = $beads[$i]['new'];
                                $table = "bead";
                                
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