<?php
    require_once "start.php";
    $connection = mysqli_connect('localhost', 'user9038_db', '12flfvcvbn21', 'user9038_db');

    if (!empty($_POST['title']) && !empty($_POST['article']) && !empty($_POST['price']) && !empty($_POST['material']) && !empty($_POST['sizes'])){
        $title = htmlspecialchars(trim($_POST['title']));
        $article = htmlspecialchars(trim($_POST['article']));
        $price = htmlspecialchars(trim($_POST['price']));
        $material = htmlspecialchars(trim($_POST['material']));
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
        $alert = "Заполнены не все поля";
        include "../../lib/alert.php";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
    }

    if (isset($_POST['btn_addTippet']) && $result == true){
        $query = "INSERT INTO `tippets` (`title`, `article`, `price`, `material`, `sizes`, `description`, `discount`, `new`) VALUES ('$title', '$article', '$price', '$material', '$sizes', '$description', '$discount', '$new')";
        $table = "tippet";
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
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
        
            unset($query);
        }
    }
?>