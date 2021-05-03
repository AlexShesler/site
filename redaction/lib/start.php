<?php
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT']."/lib/functions.php";
    
    if (!(checkUser($_SESSION["email"], $_SESSION["password"]) && (isAdmin($_SESSION["email"])))){
        header("Location: auth.php");
        exit;
    }
?>