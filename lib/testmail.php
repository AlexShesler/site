<?php
    require_once 'phpmailer/PHPMailerAutoload.php';            

    $mailer = new PHPMailer;
    $mailer->IsSMTP();
    $mailer->Host = 'smtp.mail.ru';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'calypso-krd';
    $mailer->Password = '12Flfvcvbn12';
    $mailer->SMTPSecure = 'ssl';
    $mailer->Port = '465';
    $mailer->CharSet = 'UTF-8';
    $mailer->From = 'calypso-krd@mail.ru';
    $mailer->FromName = 'Администрация Calypso-krd.ru';
    $mailer->SMTPDebug = 1;

    $mailer->AddAddress('alexshesler@gmail.com', 'Admin');
    $mailer->AddAddress('hoffman87@mail.ru', 'Admin');
    $mailer->AddCC('calypso-krd@mail.ru', 'Admin');
    $mailer->isHTML(true);

    $mailer->Subject = '!!!CALYPSO!!! Добавлен комментарий на сайте';
    $mailer->Body = 'Test';
    $mailer->AltBody = 'Test Alt';

    if($mailer->Send()) echo 'Отправлено';
    else {
        echo 'Не отправлено';
//        echo $mailer->ErrorInfo;
    }

    $mailer->ClearAddresses();
    $mailer->ClearAttachments();
?>