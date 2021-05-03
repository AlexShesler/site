<?php
    require_once "start.php";
    $connection = mysqli_connect('localhost', 'user9038_db', '12flfvcvbn21', 'user9038_db');

    if (!empty($_POST['title']) && !empty($_POST['article']) && !empty($_POST['price']) && !empty($_POST['material']) && !empty($_POST['coating']) && !empty($_POST['insertion'])){
        $title = htmlspecialchars(trim($_POST['title']));
        $article = htmlspecialchars(trim($_POST['article']));
        $price = htmlspecialchars(trim($_POST['price']));
        $material = htmlspecialchars(trim($_POST['material']));
        $coating = htmlspecialchars(trim($_POST['coating']));
        $insertion = htmlspecialchars(trim($_POST['insertion']));
        $sizes = htmlspecialchars(trim($_POST['sizes']));
        $description = htmlspecialchars(trim($_POST['description']));
        $discount = htmlspecialchars(trim($_POST['discount']));
        if(isset($_POST['new']) && $_POST['new'] == 'on')
            $new = 1;
        else $new = 0;

        $result = true;
    }
    else{
        $result = false;
        $alert = "Заполнены не все поля<br/>";
        include "../../lib/alert.php";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
    }        
    
    if (isset($_POST['btn_addEarring']) && $result == true){
        $query = "INSERT INTO `earrings` (`title`, `article`, `price`, `material`, `coating`, `insertion`, `description`, `discount`, `new`) VALUES ('$title', '$article', '$price', '$material', '$coating', '$insertion', '$description', '$discount', '$new')";
        $table = "earring";
    }
    elseif (isset($_POST['btn_addBead']) && $result == true){        
        $query = "INSERT INTO `beads` (`title`, `article`, `price`, `material`, `coating`, `insertion`, `description`, `discount`, `new`) VALUES ('$title', '$article', '$price', '$material', '$coating', '$insertion', '$description', '$discount', '$new')";
        $table = "bead";
    }
    elseif (isset($_POST['btn_addBracelet']) && $result == true){
        $query = "INSERT INTO `bracelets` (`title`, `article`, `price`, `material`, `coating`, `insertion`, `description`, `discount`, `new`) VALUES ('$title', '$article', '$price', '$material', '$coating', '$insertion', '$description', '$discount', '$new')";
        $table = "bracelet";
    }
    elseif (isset($_POST['btn_addRing']) && $result == true){
        $query = "INSERT INTO `rings` (`title`, `article`, `price`, `material`, `coating`, `insertion`, `sizes`, `description`, `discount`, `new`) VALUES ('$title', '$article', '$price', '$material', '$coating', '$insertion', '$sizes', '$description', '$discount', '$new')";
        $table = "ring";
    }
    elseif (isset($_POST['btn_addKit']) && $result == true){
        $query = "INSERT INTO `kits` (`title`, `article`, `price`, `material`, `coating`, `insertion`, `description`, `discount`, `new`) VALUES ('$title', '$article', '$price', '$material', '$coating', '$insertion', '$description', '$discount', '$new')";
        $table = "kit";
    }
    elseif (isset($_POST['btn_addHair']) && $result == true){
        $query = "INSERT INTO `hairs` (`title`, `article`, `price`, `material`, `coating`, `insertion`, `description`, `discount`, `new`) VALUES ('$title', '$article', '$price', '$material', '$coating', '$insertion', '$description', '$discount', '$new')";
        $table = "hair";
    }
    elseif (isset($_POST['btn_addWedding']) && $result == true){
        $query = "INSERT INTO `weddings` (`title`, `article`, `price`, `material`, `coating`, `insertion`, `description`, `discount`, `new`) VALUES ('$title', '$article', '$price', '$material', '$coating', '$insertion', '$description', '$discount', '$new')";
        $table = "wedding";
    }
    elseif (isset($_POST['btn_addBag']) && $result == true){
        $query = "INSERT INTO `bags` (`title`, `article`, `price`, `material`, `description`, `discount`, `new`) VALUES ('$title', '$article', '$price', '$material', '$description', '$discount', '$new')";
        $table = "bag";
    }
    elseif (isset($_POST['btn_addManWatch']) && $result == true){
        $query = "INSERT INTO `man_watchs` (`title`, `article`, `price`, `material`, `description`, `discount`, `new`) VALUES ('$title', '$article', '$price', '$material', '$discount', '$new')";
        $table = "man_watch";
    }
    elseif (isset($_POST['btn_addWomanWatch']) && $result == true){
        $query = "INSERT INTO `woman_watchs` (`title`, `article`, `price`, `material`, `description`, `discount`, `new`) VALUES ('$title', '$article', '$price', '$material', '$description', '$discount', '$new')";
        $table = "woman_watch";
    }
    elseif (isset($_POST['btn_addGlass']) && $result == true){
        $query = "INSERT INTO `glasses` (`title`, `article`, `price`, `material`, `coating`, `insertion`, `description`, `discount`, `new`) VALUES ('$title', '$article', '$price', '$material', '$coating', '$insertion', '$description', '$discount', '$new')";
        $table = "glasse";
    }

    if (isset($query)){
        $result = mysqli_query($connection, $query);
        
        if (!$result) $alert = "Ошибка при добавлении товаров";
        else {
            $id = getID($article, $table);
            
            if ($_FILES['file']['error'] == 0){
                $temp_path = $_FILES['file']['tmp_name'];
                $path = $_SERVER['DOCUMENT_ROOT']."/images/content/".$table."s/".$table."_".$id.".jpg";
                move_uploaded_file($temp_path, $path);
                $alert = "Добавлено";
            }
            include "../../lib/alert.php";
            unset($query);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
        }
    }
?>