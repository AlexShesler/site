<?php
    session_start();
    if (isset ($_POST['btn_msg'])){
        $fio = htmlspecialchars($_POST['fio']);
        $email = htmlspecialchars($_POST['email_feed']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);
        $captcha = md5(htmlspecialchars($_POST['captcha']));
        
        $part_one =  substr($_SESSION['captcha'], 0, 10);
        $part_two =  substr($_SESSION['captcha'], 12, 10);
        $part_three =  substr($_SESSION['captcha'], 24, 12);

        $captcha_ses = $part_one.$part_two.$part_three;
        
        if ($captcha_ses == $captcha){
            $mailto = 'calypso.krd@gmail.com';
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

            // Дополнительные заголовки
            $headers .= 'From: Administrator <mail@calypso-krd.ru>' . "\r\n";
            $subject_main = '!!!CALYPSO!!! Письмо, отправленное с сайта!!!';

            $message_full ='Письмо от <b>'.$fio.'</b><br />';
            $message_full .='Обратный адресс: <i>'.$email.'</i><br />';
            $message_full .='Тема: <b>'.$subject.'</b><hr><br />';
            $message_full .= $message;

            $mail = mail($mailto, $subject_main, $message_full, $headers);

            $alert = "Отправлено";
            include "alert.php";
            
            unset($_SESSION['fio']);
            unset($_SESSION['email_feed']);
            unset($_SESSION['subject']);
            unset($_SESSION['message']);
            
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
        }
        else {
            $alert = "Не верно введен код безовасности";
            include "alert.php";
            $_SESSION['fio'] = htmlspecialchars($_POST['fio']);
            $_SESSION['email_feed'] = htmlspecialchars($_POST['email_feed']);
            $_SESSION['subject'] = htmlspecialchars($_POST['subject']);
            $_SESSION['message'] = htmlspecialchars($_POST['message']);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
        }
        
    }
?>