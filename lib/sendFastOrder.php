<?php
    include 'start.php';

    if (isset($_POST['order'])){
        if (htmlspecialchars($_POST['count']) < 1){
            $alert = "Не верно введено колличество товаров!";
            include "alert.php";
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
            exit;
        }
        $count = htmlspecialchars($_POST['count']);
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $comment = htmlspecialchars($_POST['comment']);
        $article = htmlspecialchars($_POST['article']);
        $title = htmlspecialchars($_POST['title']);
        
        $captcha = md5(htmlspecialchars($_POST['captcha']));
        
        $part_one =  substr($_SESSION['captcha'], 0, 10);
        $part_two =  substr($_SESSION['captcha'], 12, 10);
        $part_three =  substr($_SESSION['captcha'], 24, 12);

        $captcha_ses = $part_one.$part_two.$part_three;
        
        if (empty($comment))
            $comment = "Комментарий отсутствует";
        
        if ($captcha_ses != $captcha){
            $alert = "Не верно введен код безопасности";
            include "lib/alert.php";
            $_SESSION['name_reg'] = htmlspecialchars($_POST['name_reg']);
            $_SESSION['last_name'] = htmlspecialchars($_POST['last_name']);
            $_SESSION['email_reg'] = htmlspecialchars($_POST['email_reg']);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
            exit();
        }
        
        $mailto = 'calypso.krd@gmail.com';
        
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        // Дополнительные заголовки
        $headers .= 'From: Calypso Order <mail@calypso-krd.ru>' . "\r\n";
        $subject = '!!!CALYPSO!!! Оформлен БЫСТРЫЙ ЗАКАЗ на сайте!!!';
        
        $message = 'Быстрый заказ от <b>'.$name.'</b><br/>';
        $message .= 'Телефон: <i>'.$phone.'</i><br/>';
        $message .= '<b>Комментарий: </b><br/>'.$comment.'<br/><hr>';
        $message .= '<b>Заказанный товар</b><br/>';
        $message .= 'Артикул: '.$article.'<br/>';
        $message .= 'Название: '.$title.'<br/>';
        $message .= 'Колличество: <b>'.$count.'</b>';       
        
        if (addToFastOrders($name, $phone, $comment, $article, $title, $count)){
            $mail = mail($mailto, $subject, $message, $headers);
        
            if ($mail == true){
                header("Location: ../msg_after_send1.php");
            }
            else 
                header("Location: ../msg_after_send2.php");        
        }
    }
?>