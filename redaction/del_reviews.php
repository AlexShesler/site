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
                    <form name="del_reviews" method="post" action="lib/del_review.php">
                        <fieldset class="add">
                            <legend>Удалить комментарий</legend>
                            <input type="text" name="id" placeholder="номер">
                            <input type="submit" name="btn_delReviews" value="Удалить">
                        </fieldset>                    
                    </form>
                </div>
                <div class="list_of_items">
                    <table class="tbl_list tbl_reviews">
                        <tr>
                            <th>номер</th>
                            <th>Имя</th>
                            <th>Комментарий</th>
                        </tr>
                        <?php
                            $comments = getAllCommentsAdmin();
                            for ($i = 0; $i < count($comments); $i++){
                                $id = $comments[$i]["id"];
                                $name = $comments[$i]["name"];
                                $comment = $comments[$i]["comment"];
                                include "blocks/intro_reviews.php";
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