<?php
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["password"]);
    unset($_SESSION["name"]);
    unset($_SESSION['prod_col']);
    unset($_SESSION['summPrice']);
    unset($_SESSION['table']);
    unset($_SESSION['article']);
    unset($_SESSION['product_count']);
    unset($_SESSION['price']);
    unset($_SESSION['prod_count']);
    unset($_SESSION['table']);
    unset($_SESSION['title']);
    unset($_SESSION['article']);
    unset($_SESSION['id']);
    unset($_SESSION['cart_sum']);
    unset($_SESSION['captcha']);

    header("Location: ".$_SERVER["HTTP_REFERER"]);
    exit;
?>