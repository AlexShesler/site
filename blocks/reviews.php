<div class="content_tbl reviews clearfix">
    <h3 class="h3_title">Оставить коментарий</h3>
    <form name="reviews" action="lib/add_comment.php" method="post">
        <p>
            <label>Имя:</label>
            <input type="text" name="name_comment" value="<?php echo $_SESSION['name_comment']?>" required/><br/>
        </p>
        <p>
            <label>Комментарий:</label><br/>
            <textarea name="comment" rows="3" required><?php echo $_SESSION['comment']?></textarea>
        </p>        
        <!--[if lt IE 10]><label>Введите код</label><![endif]-->
        <p class="captcha">
            <img class="captcha_img_reviws" src="lib/captcha.php" alt="Код">
            <input class="captcha_input" type="text" name="captcha" placeholder="Введите код с картинки" required>
        </p>
        <input type="submit" name="btn_send_comment" value="Отправить">
    </form>
</div>
<div class="list_comments">
    <?php
        $comments = getAllComments();
        for ($i = count($comments) - 1; $i >= 0 ; $i--){
            $name = $comments[$i]["name"];
            $comment = $comments[$i]["comment"];
            $date = $comments[$i]["date"];
            include "blocks/reviews_comment.php";
        }
    ?>
</div>