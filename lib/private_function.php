<?php
    session_start();
    $mysqli = false;
    $connection =  mysqli_connect('localhost', 'root', '', 'mysiteDB');

    function connectDB(){
        global $mysqli;
        $mysqli = new mysqli("localhost", "root", "", "mysiteDB");
        $mysqli->query("SET NAMES 'utf8'");
    }
    
    function closeDB(){
        global $mysqli;
        $mysqli->close();
    }

    function getUserID($email){
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `users` WHERE `email` = '".$email."'");
        $row = $result_set->fetch_assoc();
        closeDB();
        return $row["id"];
    }
    if (isset($_POST['btn_change_email']) && (!empty($_POST['private_email']))){
        $email = htmlspecialchars($_POST['private_email']);
        $id = getUserID(htmlspecialchars($_SESSION['email']));
        $query = "UPDATE `users` SET email = '$email' WHERE id = '$id'";
        $result = mysqli_query($connection, $query);
        if ($result) $result1 = mysqli_query($connection, "UPDATE `orders` SET email = '$email' WHERE user_id = '$id'");
    }
    else if ((isset($_POST['btn_change_pass'])) && (!empty($_POST['private_pass'])) && (!empty($_POST['private_pass1'])) && ($_POST['private_pass'] == $_POST['private_pass1'])){
        $password = md5(htmlspecialchars($_POST['private_pass']));
        $id = getUserID(htmlspecialchars($_SESSION['email']));
        $query = "UPDATE `users` SET password = '$password' WHERE id = '$id'";
        $result = mysqli_query($connection, $query);
    }

    if ((isset($result)) && ($result == true)){        
        $alert = "Смена прошла успешно!";
        include "alert.php";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
    }
    else if (!$result){
        $alert = "Произошла ошибка. Попробуйте снова.";
        include "alert.php";
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
    }        
?>