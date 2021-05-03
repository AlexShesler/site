<div class="content_tbl">    
    <div class="preview">
        <a class="img_preview" href="../<?php echo $table;?>s_product.php?id=<?php echo $id;?>">
            <?php
                if ($new == 1) echo "<div class=\"preview_new\">Новинка</div>"
            ?>
            <img src="../images/content/<?php echo $table;?>s/<?php echo $table;?>_<?php echo $id;?>.jpg" alt="<?php echo $title;?>" width="200" height="200">
            <b class="price_preview">Цена <?php echo $price;?> руб.</b>
        </a>
        <?php
            include 'blocks/inBasket.php';
        ?>
        <a class="img_preview" href="../<?php echo $table;?>s_product.php?id=<?php echo $id;?>">
            <h4 class="title"><?php echo $title;?></h4>
        </a>
    </div>
</div>