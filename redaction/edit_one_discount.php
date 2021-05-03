<?php
    require_once "lib/start.php";
?>
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
                    <form name="edit_bag" method="post" action="lib/discount.php">
                    <fieldset>
                        <legend>Редактировать <?php echo $_POST['table']?></legend>
                        <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                        <label>Название: &nbsp;</label>
                        <input type="text" name="title" value="<?php echo $_POST['title']; ?>"><br/>
                        <label>Описание: </label>
                        <input type="text" name="description" value="<?php echo $_POST['description']; ?>"><br/>
                        <input type="hidden" name="table" value="<?php echo $_POST['table']; ?>"><br/>
                        <input type="submit" name="btn_edit_one" value="Изменить">
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