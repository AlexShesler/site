<?php
    $connection =  mysqli_connect('localhost', 'user9038_db', '12flfvcvbn21', 'user9038_db');

    if ((isset($_POST["btn_delReviews"])) && (!empty($_POST["id"]))){
        $id = htmlspecialchars($_POST["id"]);
        
        $query = "DELETE FROM `reviews` WHERE `id` = '$id'";
        
        $result = mysqli_query($connection, $query) or die(mysql_error());

        if (!$result) $alert = "Ошибка при удалении комментария";
        else $alert = "Комментарий удален";
        
        include "../../lib/alert.php";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";

        unset($query);
    }
?> 