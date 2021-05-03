<div class="full_product clearfix">
    <h3><?php echo $title;?></h3>
    <div class="left img">
        <?php if ($discount > 0) echo "<div class=\"preview_discount\">".$discount."%</div>";?>
        <img src="../images/content/man_watchs/man_watch_<?php echo $id;?>.jpg" alt="<?php echo $title;?>" width="300" height="300">
        <a class="btn_zoom" onclick="image_zoom()" title="Увеличить">
            <img src="../images/zoom_in.png">
        </a>
    </div>
    <div class="left materials">
        <b>Артикул:</b> <?php echo $article;?><br/>
        <b>Механизм:</b> <?php echo $mechanism;?><br/>
        <b>Материал ремешка:</b> <?php echo $strap_material;?><br/>
        <b>Материал корпуса:</b> <?php echo $body_material;?><br/>
    </div>
    <div class="left price">
        <span>Цена: <?php
                            $with_discount = $price - ($price / 100 * $discount);
                            if ($discount > 0) echo "<s>".$price."</s> ".$with_discount."р.";
                            else echo $price;?>
        </span>
    </div>
    <div class="left form">
        <?php
            include 'blocks/inBasket.php';
        ?>
        <button class="busket fast" onclick="fastForm_open()">Быстрый заказ</button>
    </div>
    <div class="description left">
        <span><?php echo $description;?></span>
    </div>
</div>
<?php
    include 'blocks/fastForm.php';
?>