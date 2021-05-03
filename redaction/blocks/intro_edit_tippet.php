<tr>
    <td><?php echo $id;?></td>
    <td><?php echo $title;?></td>
    <td><?php echo $article;?></td>
    <td><?php echo $price;?></td>
    <td><?php echo $material;?></td>
    <td><?php echo $sizes;?></td>
    <td><?php echo $description;?></td>
    <td><?php echo $discount;?></td>
    <td><?php if ($showround == 0) echo "Убран с витрины";?></td>
    <td><?php if ($new == 1) echo "Новинка";?></td>
    <td>
        <form method="post" action="edit_tippet_one.php">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="hidden" name="title" value="<?php echo $title;?>">
            <input type="hidden" name="article" value="<?php echo $article;?>">
            <input type="hidden" name="price" value="<?php echo $price;?>">
            <input type="hidden" name="material" value="<?php echo $material;?>">
            <input type="hidden" name="sizes" value="<?php echo $sizes;?>">
            <input type="hidden" name="description" value="<?php echo $description;?>">
            <input type="hidden" name="discount" value="<?php echo $discount;?>">
            <input type="hidden" name="new" value="<?php echo $new;?>">
            <input type="hidden" name="showround" value="<?php echo $showround;?>">
            <input type="hidden" name="table" value="<?php echo $table;?>">
            
            <input type="submit" name="btn_edit" value="Редактировать">
        </form>
    </td>
</tr>