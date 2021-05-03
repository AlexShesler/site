<div class="content_tbl">    
    <div class="preview">
        <a href="../rings_product.php?id=<?php echo $id;?>">
            <?php
                if ($new == 1) echo "<div class=\"preview_new\">Новинка</div>";
                if ($discount > 0) echo "<div class=\"preview_discount\">".$discount."%</div>";
                //if (isIE() && $new == 1) echo "<img class=\"ie_newimage\" src=\"../images/new.png\">";
            ?>
            <img src="../images/content/rings/ring_<?php echo $id;?>.jpg" alt="<?php echo $title;?>" width="200" height="200">
            <b class="price_preview">Цена <?php echo $price;?> руб.</b>
        </a>
        <?php
            include 'blocks/inBasket.php';
        ?>
        <a href="../rings_product.php?id=<?php echo $id;?>">
            <h4 class="title"><?php echo $title;?></h4>
        </a>
    </div>    
</div>