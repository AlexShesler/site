<?php

    $connection =  mysqli_connect('localhost', 'user9038_db', '12flfvcvbn21', 'user9038_db');

    if (!empty($_POST['id'])){
        $id = htmlspecialchars(trim($_POST['id']));
        $result = true;
    }
    else{
        $result = false;
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }

    if (isset($_POST['btn_delEarring']) && $result == true){
        $query = "DELETE FROM `earrings` WHERE `id` = '$id'";
        $table = "earring";
    }
    elseif (isset($_POST['btn_delBead']) && $result == true){        
        $query = "DELETE FROM `beads` WHERE `id` = '$id'";
        $table = "bead";
    }
    elseif (isset($_POST['btn_delBracelet']) && $result == true){
        $query = "DELETE FROM `bracelets` WHERE `id` = '$id'";
        $table = "bracelet";
    }
    elseif (isset($_POST['btn_delRing']) && $result == true){
        $query = "DELETE FROM `rings` WHERE `id` = '$id'";
        $table = "ring";
    }
    elseif (isset($_POST['btn_delKit']) && $result == true){
        $query = "DELETE FROM `kits` WHERE `id` = '$id'";
        $table = "kit";
    }
    elseif (isset($_POST['btn_delHair']) && $result == true){
        $query = "DELETE FROM `hairs` WHERE `id` = '$id'";
        $table = "hair";
    }
    elseif (isset($_POST['btn_delTippet']) && $result == true){
        $query = "DELETE FROM `tippets` WHERE `id` = '$id'";
        $table = "tippet";
    }
    elseif (isset($_POST['btn_delBag']) && $result == true){
        $query = "DELETE FROM `bags` WHERE `id` = '$id'";
        $table = "bag";
    }
    elseif (isset($_POST['btn_delManWatch']) && $result == true){
        $query = "DELETE FROM `man_watchs` WHERE `id` = '$id'";
        $table = "man_watch";
    }
    elseif (isset($_POST['btn_delWomanWatch']) && $result == true){
        $query = "DELETE FROM `woman_watchs` WHERE `id` = '$id'";
        $table = "woman_watch";
    }    
    elseif (isset($_POST['btn_delGlass']) && $result == true){
        $query = "DELETE FROM `glasses` WHERE `id` = '$id'";
        $table = "glasse";
    }

    if (isset($query)){
        $result = mysqli_query($connection, $query) or die(mysql_error());

        if (!$result) $alert = "Ошибка при удалении товаров";
        else {
            $path = $_SERVER['DOCUMENT_ROOT']."/images/content/".$table."s/".$table."_".$id.".jpg";
            unlink($path);
            $alert = "Удалено";
        }
            include "../../lib/alert.php";
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
        
            unset($query);
    }
?>