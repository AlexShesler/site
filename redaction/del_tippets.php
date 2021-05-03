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
                    <form name="del_Tippets" method="post" action="lib/del.php">
                        <fieldset class="add">
                            <legend>Удалить палантины</legend>
                            <input type="text" name="id" placeholder="номер">
                            <input type="submit" name="btn_delTippet" value="Удалить">
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
                            <th>состав</th>
                            <th>размер</th>
                        </tr>
                        <?php
                            $tippets = getAllTippetsAdmin();
                            for ($i = 0; $i < count($tippets); $i++){
                                $id = $tippets[$i]["id"];
                                $title = $tippets[$i]["title"];
                                $article = $tippets[$i]["article"];
                                $price = $tippets[$i]["price"];
                                $material = $tippets[$i]["material"];
                                $coating = $tippets[$i]["sizes"];
                                include "blocks/intro_list_items_tippets.php";
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