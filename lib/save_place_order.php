<?php
    include 'start.php';
    
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = "Индекс: ".htmlspecialchars($_POST['index'])." ".htmlspecialchars($_POST['zone_id'].", г.".$_POST['town'].", ул. ".$_POST['street'].", дом ".$_POST['house'].", кв. ".$_POST['flat']);

    $order = "";    
    for ($i = 0; $i < $_SESSION['prod_count']; $i++){
        $order .= $_SESSION['title'][$i]." - ".$_SESSION['product_count'][$i]."шт. (арт. ".$_SESSION['article'][$i].")\n\r";
    }
    
    $summ_price = $_SESSION['summPrice'];
    $user_id = getUserID($_SESSION['email']);

    $captcha = md5(htmlspecialchars($_POST['captcha']));
        
    $part_one =  substr($_SESSION['captcha'], 0, 10);
    $part_two =  substr($_SESSION['captcha'], 12, 10);
    $part_three =  substr($_SESSION['captcha'], 24, 12);

    $captcha_ses = $part_one.$part_two.$part_three;
    
    if (empty($first_name) or empty($last_name) or empty($phone) or empty($_POST['index']) or empty($_POST['zone_id']) or empty($_POST['town']) or empty($_POST['street']) or empty($_POST['house'])){
        $alert = "Заполнены не все обязательные поля";
        include "alert.php";
        
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['index'] = htmlspecialchars($_POST['index']);
        $_SESSION['zone_id'] = htmlspecialchars($_POST['zone_id']);
        $_SESSION['town'] = htmlspecialchars($_POST['town']);
        $_SESSION['street'] = htmlspecialchars($_POST['street']);
        $_SESSION['house'] = htmlspecialchars($_POST['house']);
        $_SESSION['flat'] = htmlspecialchars($_POST['flat']);
        
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
        exit();
    }
    if ($captcha_ses != $captcha){
        $alert = "Не верно введен код безопасности!";
        include "alert.php";
        
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['index'] = htmlspecialchars($_POST['index']);
        $_SESSION['zone_id'] = htmlspecialchars($_POST['zone_id']);
        $_SESSION['town'] = htmlspecialchars($_POST['town']);
        $_SESSION['street'] = htmlspecialchars($_POST['street']);
        $_SESSION['house'] = htmlspecialchars($_POST['house']);
        $_SESSION['flat'] = htmlspecialchars($_POST['flat']);
        
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
        exit();
    }
//    echo $first_name."<br>".$phone."<br>".$address."<br>".$order;

    if (!empty($first_name) && !empty($phone) && !empty($address) && !empty($order)){
        
        if (addToCartTbl($first_name, $last_name, $email, $phone, $address, $order, $summ_price, $user_id)){
            $mailto = 'calypso.krd@gmail.com';
            
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

            // Дополнительные заголовки
            $headers .= 'From: Calypso Order <mail@calypso-krd.ru>' . "\r\n";
            $subject = '!!!CALYPSO!!! Оформлен ЗАКАЗ на сайте!!!';

            $message = 'Заказ от <b>'.$first_name.' '.$last_name.'</b><br/>';
            $message .= 'Почта <b>'.$email.'</b><br/>';            
            $message .= 'Телефон: <i>'.$phone.'</i><br/>';
            $message .= '<b>Адрес:</b><br/>'.$address.'<br/><hr>';
            $message .= '<b>Заказанные товары:</b><br/>';
            $message .= $order;
            $message .= '<b>На сумму:</b> '.$summ_price;

            $mail = mail($mailto, $subject, $message, $headers);
            
            //echo $mail;
            
            if ($mail == true){
                unset($_SESSION['title']);
                unset($_SESSION['product_count']);
                unset($_SESSION['price']);
                unset($_SESSION['table']);
                unset($_SESSION['article']);
                unset($_SESSION['id']);                
                unset($_SESSION['prod_col']);
                unset($_SESSION['summPrice']);
                unset($_SESSION['prod_count']);
                unset($_SESSION['cart_sum']);
                unset($_SESSION['captcha']);
                
                unset($_SESSION['first_name']);
                unset($_SESSION['last_name']);
                unset($_SESSION['phone']);
                unset($_SESSION['index']);
                unset($_SESSION['zone_id']);
                unset($_SESSION['town']);
                unset($_SESSION['street']);
                unset($_SESSION['house']);
                unset($_SESSION['flat']);
                header("Location: ../msg_after_send1.php");
            }
            else 
                header("Location: ../msg_after_send2.php");        
            }
    }
    else {
        return false;
        header("Location: ../msg_after_send2.php");
    }
?>