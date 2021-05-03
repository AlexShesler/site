<?php
    session_start();

    for ($i = 0; $i < $_SESSION['prod_count']; $i++){
        unset($_SESSION['title'][$i]);
        unset($_SESSION['product_count'][$i]);
        unset($_SESSION['price'][$i]);
        unset($_SESSION['table'][$i]);
    }
    unset($_SESSION['prod_col']);
    unset($_SESSION['summPrice']);
    unset($_SESSION['prod_count']);
    
    header('Location: '.$_SERVER['HTTP_REFERER']);
?>