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
                <div class="form_del">
                    <form name="del_bags" method="post" action="lib/del.php">
                        <fieldset class="add">
                            <legend>Удалить очки</legend>
                            <input type="text" name="id" placeholder="номер">
                            <input type="submit" name="btn_delGlass" value="Удалить">
                        </fieldset>                    
                    </form>
                </div>
                <div class="list_of_items">
                    <table class="tbl_list">
                        <tr>
                            <th>номер</th>
                            <th>название</th>
                            <th>артикул</th>
                            <th>цена</th>
                            <th>оправа</th>
                            <th>линза</th>
                        </tr>
                        <?php
                            $glasses = getAllGlassesAdmin();
                            for ($i = 0; $i < count($glasses); $i++){
                                $id = $glasses[$i]["id"];
                                $title = $glasses[$i]["title"];
                                $article = $glasses[$i]["article"];
                                $price = $glasses[$i]["price"];
                                $material = $glasses[$i]["material"];
                                $insertion = $glasses[$i]["insertion"];
                                include "blocks/intro_list_items_glasses.php";
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