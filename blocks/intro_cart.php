<tr>
    <td><img src="images/content/<?php echo $_SESSION['table'][$i];?>s/<?php echo $_SESSION['table'][$i];?>_<?php echo $prod_in_cart['id'];?>.jpg" alt="<?php echo $prod_in_cart['title'];?>" width="100" height="100"></td>
    <td style="width: 100px;"><?php echo $prod_in_cart['title']?>(арт:<?php echo $_SESSION['article'][$i]?>)</td>
    <td>
        <form  class="left marg5" action="" method="POST">
            <input type="text" size="1" value="<?php echo $_SESSION['product_count'][$i];?>" name="p_count" />
            <input type="hidden" value="<?php echo $i;?>" name="upd_id"/>
            <input name="update" type="submit" value="" title="Применить" /> 
        </form>
        <form class="left marg5" action="" method="POST">
            <input type="hidden" value="<?php echo $i;?>" name="del_id" />
            <input name="del" type="submit" value="" title="Удалить" />
        </form>
    </td>
    <td><?php echo $_SESSION['price'][$i];?></td>
    <td><?php echo $_SESSION['price'][$i]* $_SESSION['product_count'][$i];?></td>
</tr>