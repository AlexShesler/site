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
                            <legend>Удалить сумки</legend>
                            <input type="text" name="id" placeholder="номер">
                            <input type="submit" name="btn_delBag" value="Удалить">
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
                            $bags = getAllBagsAdmin();
                            for ($i = 0; $i < count($bags); $i++){
                                $id = $bags[$i]["id"];
                                $title = $bags[$i]["title"];
                                $article = $bags[$i]["article"];
                                $price = $bags[$i]["price"];
                                $material = $bags[$i]["material"];
                                $coating = $bags[$i]["coating"];
                                $insertion = $bags[$i]["insertion"];
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