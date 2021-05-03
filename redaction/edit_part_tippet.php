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
                <div class="form_edit" id="form_edit">                    
                    <form name="edit_tippet" method="post" action="lib/edit_tippet.php" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Редактировать <?php echo $_POST['table']?></legend>
                        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                        <label>Название: &nbsp;</label>
                        <input type="text" name="title" value="<?php echo $_POST['title']; ?>"><br/>
                        <label>Артикул: &nbsp;&nbsp;</label>
                        <input type="text" name="article" value="<?php echo $_POST['article']; ?>"><br/>
                        <label>Цена: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="price" value="<?php echo $_POST['price']; ?>"><br/>
                        <label>Материал: </label>
                        <input type="text" name="material" value="<?php echo $_POST['material']; ?>">
                        <label>Покрытие: </label>
                        <input type="text" name="sizes" value="<?php echo $_POST['sizes']; ?>"><br/>
                        <label>Комментарий: </label>
                        <input type="text" name="description" value="<?php echo $_POST['description']; ?>"><br/>
                        <label>Скидка: </label></br>
                        <input type="text" name="discount" value="<?php echo $_POST['discount']; ?>"></br>
                        <label><input type="checkbox" name="new"<?php if ($_POST['new'] == 1) echo " checked";?>>Новинка</label>
                        <label><input type="checkbox" name="showround"<?php if ($_POST['showround'] == 0) echo " checked";?>>Убрать с ветрины</label>
                        <input type="hidden" name="table" value="<?php echo $_POST['table']; ?>"><br/>
                        <input type="file" name="file" accept="image/jpeg"><br/>
                        <input type="submit" name="btn_edit_tippet" value="Изменить">
                    </fieldset>                    
                </form>
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