<tr>
    <td><?php echo $id;?></td>
    <td><?php echo $title;?></td>
    <td><?php echo $description;?></td>
    <td>
        <form method="post" action="edit_one_discount.php">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="hidden" name="title" value="<?php echo $title;?>">
            <input type="hidden" name="description" value="<?php echo $description;?>">
            <input type="hidden" name="table" value="<?php echo $table;?>">
            
            <input type="submit" name="btn_edit" value="Редактировать">
        </form>
    </td>
</tr>