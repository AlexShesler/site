<tr>
    <td><?php echo $id_order;?></td>
    <td><?php echo $first_name;?></td>
    <td><?php echo $last_name;?></td>
    <td><?php echo $email;?></td>
    <td><?php echo $phone;?></td>
    <td><?php echo $order;?></td>
    <td><?php echo $summ_price;?></td>
    <td><?php echo $tracking_code;?></td>
    <td><?php echo $status;?></td>
    <td>
        <form method="post" action="lib/edit_order_function.php">
            <input type="hidden" name="id_order" value="<?php echo $id_order;?>">
            <input type="hidden" name="email_order" value="<?php echo $email;?>">
            <input type="hidden" name="name" value="<?php echo $last_name;?>">
            <input type="submit" name="btn_processed" value="Обработан">
        </form>
        <form method="post" action="lib/edit_order_function.php">
            <input type="hidden" name="id_order" value="<?php echo $id_order;?>">
            <input type="hidden" name="email_order" value="<?php echo $email;?>">
            <input type="hidden" name="name" value="<?php echo $last_name;?>">
            <input type="submit" name="btn_paid" value="Оплачен">
        </form>
        <form method="post" action="lib/edit_order_function.php">
            <input type="hidden" name="id_order" value="<?php echo $id_order;?>">
            <input type="hidden" name="email_order" value="<?php echo $email;?>">
            <input type="hidden" name="name" value="<?php echo $last_name;?>">
            <input type="text" name="tracking_code" size="9" placeholder="код">
            <input type="submit" name="btn_sent" value="Отправлен">
        </form>
        <form method="post" action="lib/edit_order_function.php">
            <input type="hidden" name="id_order" value="<?php echo $id_order;?>">
            <input type="hidden" name="email_order" value="<?php echo $email;?>">
            <input type="hidden" name="name" value="<?php echo $last_name;?>">
            <input type="submit" name="btn_delivered" value="Доставлен">
        </form>
    </td>
</tr>