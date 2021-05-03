<?php
    $connection =  mysqli_connect('localhost', 'user9038_db', '12flfvcvbn21', 'user9038_db');
    $result = false;

    if ((isset($_POST['id_flag'])) && (!empty($_POST['id_flag'])) && (isset($_POST['table_flag'])) && (!empty($_POST['table_flag']))){
        $id = htmlspecialchars($_POST['id_flag']);
        $table = htmlspecialchars($_POST['table_flag']);
        $result = true;
    }

    if ($result && isset($_POST['del_new_flag'])){
        $query = "UPDATE `".$table."s` SET new = 0 WHERE id = '$id'";
        $result = mysqli_query($connection, $query);
        
        if (!$result) $alert = "Ошибка при редактировании товара";
        else $alert = "Отредактированно";
            
        include "../../lib/alert.php";
        unset($query);
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
    }
?>