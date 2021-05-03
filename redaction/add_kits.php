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
                <form name="add_kit" method="post" action="lib/add.php" enctype="multipart/form-data">
                    <fieldset class="add">
                        <legend>Добавить комплект украшений</legend>
                        <input type="text" name="title" placeholder="название">
                        <input type="text" name="article" placeholder="артикул">
                        <input type="text" name="price" placeholder="цена">
                        <input type="text" name="material" placeholder="металл">
                        <input type="text" name="coating" placeholder="покрытие">
                        <input type="text" name="insertion" placeholder="вставка">
                        <input type="text" name="description" placeholder="комментарий"><br/>
                        <label>Скидка: </label></br>
                        <input type="text" name="discount" value="0"></br>
                        <label><input type="checkbox" name="new">Новинка</label>
                        <input type="file" name="file">
                        <input type="submit" name="btn_addKit" value="Добавить">
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