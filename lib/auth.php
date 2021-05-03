<?php
    require_once "start.php";

    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $password = md5($password);
    
    if (checkUser($email, $password)){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['name'] = getUserName($email);
    }
    else $_SESSION["error_auth"] = 1;
    
    header("Location: ".$_SERVER["HTTP_REFERER"]);
    exit;
?>