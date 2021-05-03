<?php
    require_once "start.php";

    if (!empty($_POST["name_comment"]) && !empty($_POST["comment"])){
        $name = htmlspecialchars($_POST["name_comment"]);
        $comment = htmlspecialchars($_POST["comment"]);
        $date = date("j.m.Y G:i:s");
        
        $captcha = md5(htmlspecialchars($_POST['captcha']));
        
        $part_one =  substr($_SESSION['captcha'], 0, 10);
        $part_two =  substr($_SESSION['captcha'], 12, 10);
        $part_three =  substr($_SESSION['captcha'], 24, 12);

        $captcha_ses = $part_one.$part_two.$part_three;
        
        if ((strlen($name) < 3) || (strlen($comment) < 3)) $success = false;
        else if ($captcha_ses != $captcha){
            $alert = "Не верно введен код безопасности";
            include "alert.php";
            $_SESSION['name_comment'] = htmlspecialchars($_POST['name_comment']);
            $_SESSION['comment'] = htmlspecialchars($_POST['comment']);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
            exit();
        }
        else $success = addReviewsComment($name, $comment, $date);

        if (!$success){
            $alert = "Ошибка добавления коментария";
            include "alert.php";
            $_SESSION['name_comment'] = htmlspecialchars($_POST['name_comment']);
            $_SESSION['comment'] = htmlspecialchars($_POST['comment']);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
        }
        else{
            $mailto = "calypso.krd@gmail.com";
            
            // Для отправки HTML-письма должен быть установлен заголовок Content-type
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

            // Дополнительные заголовки
            $headers .= 'From: Administrator <mail@calypso-krd.ru>' . "\r\n";
            
            $subject = "!!!CALYPSO!!! Добавлен комментарий на сайте";

            $message = "<b>".$name."</b> добавил комментарий на сайте<br /><hr>";
            $message .= $comment;

            $mail = mail($mailto, $subject, $message, $headers);
            
            unset($_SESSION['name_comment']);
            unset($_SESSION['comment']);
            
            header("Location: ".$_SERVER["HTTP_REFERER"]);
        }
    }
?>