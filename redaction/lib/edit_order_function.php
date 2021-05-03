<?php
    include 'sendmail.php';
    $connection =  mysqli_connect('localhost', 'user9038_db', '12flfvcvbn21', 'user9038_db');

    if (isset($_POST['btn_processed'])){
        $status = "Заказ обработан";
        $id_order = $_POST['id_order'];
        $name = $_POST['name'];
        $mailto = $_POST['email_order'];
        $message = "Ваш заказ принят нашим менеджером. </br>Он свяжется с вами в ближайшее время.";
        $welcome = $name.', мы рады что вы стали клиентом нашего магазина!';
        $query = "UPDATE `orders` SET `status` = '$status' WHERE id = '$id_order'";
    }

    if (isset($_POST['btn_paid'])){
        $status = "Заказ оплачен";
        $id_order = $_POST['id_order'];
        $name = $_POST['name'];
        $mailto = $_POST['email_order'];
        $welcome = $name;
        $message = "Оплата товара подтверждена!<br/>";
        $query = "UPDATE `orders` SET `status` = '$status' WHERE id = '$id_order'";
    }

    if (isset($_POST['btn_sent'])){
        $status = "Заказ отправлен";
        $id_order = $_POST['id_order'];
        $name = $_POST['name'];
        $mailto = $_POST['email_order'];
        $tracking_code = $_POST['tracking_code'];
        $welcome = $name;
        $message = 'Ваш заказ отправлен!<br/>';
        $message .= 'Почтовый идентификатор для отслеживания посылки <a href="www.russianpost.ru/tracking20/">'.$_POST['tracking_code'].'</a>.';
        $query = "UPDATE `orders` SET `status` = '$status', `tracking_code` = '$tracking_code' WHERE id = '$id_order'";
    }

    if (isset($_POST['btn_delivered'])){
        $status = "Заказ доставлен";
        $id_order = $_POST['id_order'];
        $name = $_POST['name'];
        $mailto = $_POST['email_order'];
        $welcome = $name.', мы надеемся что Вы остались довольны нашим магазином.<br/>Будем рады видеть вас снова!';
        $message = "";
        $query = "UPDATE `orders` SET `status` = '$status' WHERE id = '$id_order'";
    }
    
    if (isset($_POST['btn_fast_delivered'])){
        $status = "Заказ доставлен";
        $id_order = $_POST['id_order'];        
        $query = "UPDATE `fast_orders` SET `status` = '$status' WHERE id = '$id_order'";
        $result = mysqli_query($connection, $query);
        if (!$result){
            $alert = "Ошибка при редактировании заказа";
            include "../../lib/alert.php";
            unset($query);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
        } 
        else {
            unset($query);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
        }
    }

    if (isset($query)){
        $result = mysqli_query($connection, $query);
        if (!$result) $alert = "Ошибка при редактировании заказа";
        else {
            
            // Для отправки HTML-письма должен быть установлен заголовок Content-type
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

            // Дополнительные заголовки
            $headers .= 'From: Calypso-krd.ru <admin@calypso-krd.ru>' . "\r\n";
            
            $subject_main = "!!!CALYPSO!!! Статус Вашего заказа";
            
            $message_full .= '
                    <div style="width: 400px;margin: 0 auto;padding: 20px;text-align: center;border: 1px solid;-webkit-border-radius: 5px;-moz-border-radius: 5px;-o-border-radius: 5px;border-radius: 5px;font-size: 30px;">
                        <p style="margin-top: 0;">Номер вашего заказа <b>'.$id_order.'</b></p>
                        <table style="border-collapse: collapse;font-size: 20px;text-align: center;">
                            <tr>
                              <th style="padding-bottom: 30px;" colspan="2">'.$welcome.'</th>
                            </tr>
                            <tr>
                              <td colspan="2">'.$message.'</td>
                            </tr>
                            <tr>
                              <td colspan="2">По всем вопросам обращайтесь:</td>
                            </tr>
                            <tr>
                                <td style="padding-top: 20px;">
                                    <div>
                                        <img style="display: inline-block;" src="http://calypso-krd.ru/images/icon_contacts/icon-email.png">
                                        <div style="display: inline-block;">
                                            <h3 style="margin: 0;padding: 0;">Наша почта:</h3>
                                            <a href="mailto:calypso-krd@mail.ru">calypso.krd@gmail.com</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <img style="display: inline-block;" src="http://calypso-krd.ru/images/icon_contacts/icon-viber-whatsapp.gif">
                                        <div style="display: inline-block;">
                                            <h3 style="margin: 0;padding: 0;">Whatsapp/Viber:</h3>
                                            <span>+7 (918) 606-25-90</span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>';
            
            $message_full .= "<br/><br/><br/><br/>_______________________<br/>";
            $message_full .= "С уважением,<br/>";
            $message_full .= "администрация <a href=\"calypso-krd.ru\">calypso-krd.ru</a><br/>";
            $message_full .= "тел. +7 (918) 606-25-90<br/>";
            $message_full .= "Почта:<a href=\"mailto:calypso-krd@mail.ru\">calypso.krd@gmail.com</a>";
            
            $mail = mail($mailto, $subject_main, $message_full, $headers);
            $alert = "Отредактированно";
        }
        include "../../lib/alert.php";
        unset($query);
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
    }
?>