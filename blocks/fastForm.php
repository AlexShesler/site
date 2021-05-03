<div id="blackout">
    <div id="fastForm">
        <a class="btn_close" onclick="fastForm_close()" title="Закрыть"><img src="../images/close.png"></a>
        <p>Ваш заказ: <?php echo $title;?></p>
        <form name="send_fast_order" action="lib/sendFastOrder.php" method="post">
            <label>Колличество</label>
            <input type="number" name="count" size="1" value="1" min="1">
            <label>Имя</label>
            <input type="text" name="name" required placeholder="Обязательно для заполнения"><br/>
            <label>Телефон</label>    
            <input type="text" name="phone" required placeholder="Обязательно для заполнения"><br/>
            <label>Комментарий</label>
            <input type="text" name="comment"><br/>
            <label>Введите код</label>
            <p class="captcha">
                <img class="fast_img_captcha" src="lib/captcha.php" alt="Код">
                <input class="captcha_input" type="text" name="captcha" required>
            </p> 
            <input type="submit" value="Оформить заказ" name="order">
            <input type="hidden" name="article" value="<?php echo $article?>">
            <input type="hidden" name="title" value="<?php echo $title?>">
        </form>
    </div>
</div>