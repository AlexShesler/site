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
                            <th>оправа</th>
                            <th>линза</th>
                            <th>комментарий</th>
                            <th>Скидка</th>
                            <th>показывать</th>
                            <th>новинка</th>
                        </tr>                    
                        <?php
                            $glasses = getAllGlassesAdmin();
                            for ($i = 0; $i < count($glasses); $i++){
                                $id = $glasses[$i]['id'];
                                $title = $glasses[$i]['title'];
                                $article = $glasses[$i]['article'];
                                $price = $glasses[$i]['price'];
                                $material = $glasses[$i]['material'];
                                $insertion= $glasses[$i]['insertion'];
                                $description = $glasses[$i]['description'];
                                $discount = $glasses[$i]['discount'];
                                $showround = $glasses[$i]['showround'];
                                $new = $glasses[$i]['new'];
                                $table = "glasse";
                                
                                include "blocks/intro_edit_glasses.php";
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