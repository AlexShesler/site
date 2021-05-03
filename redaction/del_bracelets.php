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
                    <form name="del_bracelets" method="post" action="lib/del.php">
                        <fieldset class="add">
                            <legend>Удалить браслет</legend>
                            <input type="text" name="id" placeholder="номер">
                            <input type="submit" name="btn_delBracelet" value="Удалить">
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
                            $bracelets = getAllBraceletsAdmin();
                            for ($i = 0; $i < count($bracelets); $i++){
                                $id = $bracelets[$i]["id"];
                                $title = $bracelets[$i]["title"];
                                $article = $bracelets[$i]["article"];
                                $price = $bracelets[$i]["price"];
                                $material = $bracelets[$i]["material"];
                                $coating = $bracelets[$i]["coating"];
                                $insertion = $bracelets[$i]["insertion"];
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