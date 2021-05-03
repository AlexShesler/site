<?php
    require_once "start.php";

    $connection =  mysqli_connect('localhost', 'user9038_db', '12flfvcvbn21', 'user9038_db');

    if (!empty($_POST['id1']) && !empty($_POST['title1']) && !empty($_POST['article1']) && !empty($_POST['price1']) && !empty($_POST['material1']) && !empty($_POST['coating1']) && !empty($_POST['insertion1'])){
        $id = htmlspecialchars(trim($_POST['id1']));
        $title = htmlspecialchars(trim($_POST['title1']));
        $article = htmlspecialchars(trim($_POST['article1']));
        $price = htmlspecialchars(trim($_POST['price1']));
        $material = htmlspecialchars(trim($_POST['material1']));
        $coating = htmlspecialchars(trim($_POST['coating1']));
        $insertion = htmlspecialchars(trim($_POST['insertion1']));
        $sizes = htmlspecialchars(trim($_POST['sizes1']));
        $description = htmlspecialchars(trim($_POST['description1']));
        $discount = htmlspecialchars(trim($_POST['discount1']));
        $table = htmlspecialchars(trim($_POST['table1']));
        if(isset($_POST['new1']) && $_POST['new1'] == 'on')
            $new = 1;
        else $new = 0;
        if(isset($_POST['showround1']) && $_POST['showround1'] == 'on')
            $showround = 0;
        else $showround = 1;
        
        $result = true;
    }
    else{        
        $result = false;
        $alert = "Заполнены не все поля<br/>";
        include "../../lib/alert.php";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
    }    

    if (isset($_POST['btn_edit_full']) && $result == true && empty($_POST['sizes1'])){
        $query = "UPDATE `".$table."s` SET title = '$title', article = '$article', price = '$price', material = '$material', coating = '$coating', insertion = '$insertion', description = '$description', discount = '$discount', new = '$new', showround = '$showround' WHERE id = '$id'";
    }
        
    if (isset($_POST['btn_edit_full']) && $result == true && !empty($_POST['sizes1'])){
          $query = "UPDATE `".$table."s` SET title = '$title', article = '$article', price = '$price', material = '$material', sizes = '$sizes', description = '$description', discount = '$discount', new = '$new', showround = '$showround' WHERE id = '$id'";
    }

    if (isset($_POST['btn_edit_part']) && $result == true){
          $query = "UPDATE `".$table."s` SET title = '$title', article = '$article', price = '$price', material = '$material', description = '$description', discount = '$discount', new = '$new', showround = '$showround' WHERE id = '$id'";
    }

    if (isset($query)){
        $result = mysqli_query($connection, $query);

        if (!$result) $alert = "Ошибка при редактировании товара";
        else {
            $alert = "Отредактированно";
            if ($_FILES['file']['error'] == 0){
                $temp_path = $_FILES['file']['tmp_name'];
                $path = $_SERVER['DOCUMENT_ROOT']."/images/content/".$table."s/".$table."_".$id.".jpg";
                move_uploaded_file($temp_path, $path);
                $alert = "Отредактированно. Замена фотографии.";
            }
            include "../../lib/alert.php";
            unset($query);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=../index.php\">";
        }
    }
?>