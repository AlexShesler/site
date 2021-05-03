<tr>
    <td><?php echo $id_order;?></td>
    <td><?php echo $name;?></td>
    <td><?php echo $phone;?></td>
    <td><?php echo $comment;?></td>
    <td><?php echo $article;?></td>
    <td><?php echo $title;?></td>
    <td><?php echo $count;?></td>
    <td><?php echo $status;?></td>
    <td>
        <form method="post" action="lib/edit_order_function.php">
            <input type="hidden" name="id_order" value="<?php echo $id_order;?>">
            <input type="submit" name="btn_fast_delivered" value="Доставлен">
        </form>
    </td>
</tr>