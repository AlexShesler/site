<tr>
    <td><?php echo $id;?></td>
    <td><?php 
            if ($table == 'bag') echo 'Сумки';
            if ($table == 'bead') echo 'Украшения на шею';
            if ($table == 'bracelet') echo 'Браслеты';
            if ($table == 'earring') echo 'Серьги';
            if ($table == 'hair') echo 'Аксессуары для волос';
            if ($table == 'kit') echo 'Комплекты украшений';
            if ($table == 'man_watch') echo 'Часы мужские';
            if ($table == 'ring') echo 'Кольца';
            if ($table == 'woman_watch') echo 'Часы женские';
            if ($table == 'glasse') echo 'Очки';
            if ($table == 'tippet') echo 'Палантины';        
        ?>
    </td>
    <td><?php echo $title;?></td>
    <td><?php echo '<img src="../images/content/'.$table.'s/'.$table.'_'.$id.'.jpg" alt="'.$title.'" width="50" height="50">';?></td>
    <td>
        <form name="del_new_flag" action="lib/del_new_flag.php" method="post">
            <input type="hidden" name="id_flag" value="<?php echo $id;?>">
            <input type="hidden" name="table_flag" value="<?php echo $table;?>">
            <input type="submit" name="del_new_flag" value="Удалить">
        </form>
    </td>
</tr>