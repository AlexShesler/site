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
        <div class="wrapper">
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
                            <th>Категория</th>
                            <th>Название</th>
                            <th>Фото</th>
                            <th>Убрать</th>
                        </tr>                    
                        <?php
                            $new_items = getNewAdmin();
                            for ($i = 0; $i < count($new_items); $i++){
                                $id = $new_items[$i]["id"];
                                $title = $new_items[$i]["title"];
                                $table = $new_items[$i]["table"];
                                include "blocks/intro_new.php";
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