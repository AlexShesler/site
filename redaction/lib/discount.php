<?php
    $connection =  mysqli_connect('localhost', 'user9038_db', '12flfvcvbn21', 'user9038_db');

    if (isset($_POST['btn_edit_one'])){
        if (!empty($_POST['id']) && !empty($_POST['title']) && !empty($_POST['description'])){
            $id = htmlspecialchars(trim($_POST['id']));
            $title = htmlspecialchars(trim($_POST['title']));
            $description = htmlspecialchars(trim($_POST['description']));
            $table = htmlspecialchars(trim($_POST['table']));

            $result = true;
        }
        else{        
            $result = false;
            $alert = "Заполнены не все поля<br/>";
            include "../../lib/alert.php";
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
        }    

        if ($result == true){
            $query = "UPDATE `".$table."s` SET title = '$title', description = '$description' WHERE id = '$id'";
        }

        if (isset($query)){
            $result = mysqli_query($connection, $query);
            if (!$result) $alert = "Ошибка при редактировании товара";
            else $alert = "Отредактированно";

            include "../../lib/alert.php";
            unset($query);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=../index.php\">";
        }
    }

    if (isset($_POST['btn_delDiscount']) && !empty($_POST['id'])){
        $id = $_POST['id'];
        $query = "DELETE FROM `discounts` WHERE `id` = '$id'";
        $result = mysqli_query($connection, $query);

        if (!$result) $alert = "Ошибка при удалении товаров";
        else $alert = "Удалено";
        
        include "../../lib/alert.php";
        unset($query);
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";        
    }

    if (isset($_POST['btn_addDiscounts']) && !empty($_POST['title']) && !empty($_POST['description'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $query = "INSERT INTO `discounts` (`title`, `description`) VALUES ('$title', '$description')";
        $table = "discounts";
        $result = mysqli_query($connection, $query);

        if (!$result) $alert = "Ошибка при добавлении товаров";
        else $alert = "Добавлено";
        
        include "../../lib/alert.php";
        unset($query);
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
    }
?>