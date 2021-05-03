<div class="content_tbl">    
    <div itemscope itemtype="http://schema.org/Product" class="preview">
        <a href="../<?php echo $table;?>s_product.php?id=<?php echo $id;?>">
            <?php
                if ($new == 1) echo "<div class=\"preview_new\">Новинка</div>";
            ?>
            <img itemprop="image" src="../images/content/<?php echo $table;?>s/<?php echo $table;?>_<?php echo $id;?>.jpg" alt="<?php echo $title;?>" width="200" height="200">
            <b itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="price_preview"><span itemprop="price">Цена <?php echo $price;?> руб</span>.</b>
        </a>
        <?php
            include 'blocks/inBasket.php';
        ?>
        <a href="../<?php echo $table;?>s_product.php?id=<?php echo $id;?>">
            <h4 itemprop="name" class="title"><?php echo $title;?></h4>
        </a>
    </div>    
</div> 