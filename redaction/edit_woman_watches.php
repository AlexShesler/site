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
                            <th>механизм</th>
                            <th>материал ремешка</th>
                            <th>материал корпуса</th>
                            <th>комментарий</th>
                            <th>Скидка</th>
                            <th>показывать</th>
                            <th>новинка</th>
                        </tr>                    
                        <?php
                            $woman_watchs = getAllWatchesWomanAdmin();
                            for ($i = 0; $i < count($woman_watchs); $i++){
                                $id = $woman_watchs[$i]['id'];
                                $title = $woman_watchs[$i]['title'];
                                $article = $woman_watchs[$i]['article'];
                                $price = $woman_watchs[$i]['price'];
                                $mechanism = $woman_watchs[$i]['mechanism'];
                                $strap_material = $woman_watchs[$i]['strap_material'];
                                $body_material = $woman_watchs[$i]['body_material'];                                
                                $description = $woman_watchs[$i]['description'];
                                $discount = $woman_watchs[$i]['discount'];
                                $showround = $woman_watchs[$i]['showround'];
                                $new = $woman_watchs[$i]['new'];
                                $table = "woman_watch";
                                
                                include "blocks/intro_edit_watches.php";
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