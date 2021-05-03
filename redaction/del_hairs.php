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
                    <form name="del_Hairs" method="post" action="lib/del.php">
                        <fieldset class="add">
                            <legend>Удалить аксессуары для волос</legend>
                            <input type="text" name="id" placeholder="номер">
                            <input type="submit" name="btn_delHair" value="Удалить">
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
                            <th>металл</th>
                            <th>покрытие</th>
                            <th>вставка</th>
                        </tr>
                        <?php
                            $hairs = getAllHairsAdmin();
                            for ($i = 0; $i < count($hairs); $i++){
                                $id = $hairs[$i]["id"];
                                $title = $hairs[$i]["title"];
                                $article = $hairs[$i]["article"];
                                $price = $hairs[$i]["price"];
                                $material = $hairs[$i]["material"];
                                $coating = $hairs[$i]["coating"];
                                $insertion = $hairs[$i]["insertion"];
                                include "blocks/intro_list_items.php";
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