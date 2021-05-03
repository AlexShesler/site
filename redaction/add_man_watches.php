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
               <form name="add_man_watches" method="post" action="lib/add_watches.php" enctype="multipart/form-data">
                    <fieldset class="add">
                        <legend>Добавить мужские часы</legend>
                        <input type="text" name="title" placeholder="название">
                        <input type="text" name="article" placeholder="артикул">
                        <input type="text" name="price" placeholder="цена">
                        <input type="text" name="mechanism" placeholder="механизм">
                        <input type="text" name="strap_material" placeholder="материал ремешка">
                        <input type="text" name="body_material" placeholder="материал корпуса">
                        <input type="text" name="description" placeholder="комментарий"><br/>
                        <label>Скидка: </label></br>
                        <input type="text" name="discount" value="0"></br>
                        <label><input type="checkbox" name="new">Новинка</label>
                        <input type="file" name="file" accept="image/jpeg">
                        <input type="submit" name="btn_addManWatch" value="Добавить">
                    </fieldset>                    
                </form>
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