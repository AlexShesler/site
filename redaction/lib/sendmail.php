<?php
# настроен под мэйл.ру
$config['smtp_username'] = 'calypso-krd@mail.ru'; //Смените на имя своего почтового ящика.
$config['smtp_port'] = '25'; // Порт работы. Не меняйте, если не уверены.
$config['smtp_host'] = 'smtp.mail.ru'; //сервер для отправки почты
$config['smtp_password'] = 'qwer5678'; //пароль
$config['smtp_charset'] = 'UTF-8'; //кодировка сообщений.
$config['smtp_from'] = 'calypso-krd.ru'; //Ваше имя - или имя Вашего сайта. Будет показывать при прочтении в поле "От кого"
 
 
function smtpmail($mail_to, $subject, $message, $headers='') {
        global $config;
        $SEND =   "Date: ".date("D, d M Y H:i:s") . " UT\r\n";
        $SEND .=   'Subject: =?'.$config['smtp_charset'].'?B?'.base64_encode($subject)."=?=\r\n";
        if ($headers) $SEND .= $headers."\r\n\r\n";
        else
        {
                $SEND .= "Reply-To: ".$config['smtp_username']."\r\n";
                $SEND .= "MIME-Version: 1.0\r\n";
                $SEND .= "Content-Type: text/plain; charset=\"".$config['smtp_charset']."\"\r\n";
                $SEND .= "Content-Transfer-Encoding: 8bit\r\n";
                $SEND .= "From: \"".$config['smtp_from']."\" <".$config['smtp_username'].">\r\n";
                $SEND .= "To: $mail_to <$mail_to>\r\n";
                $SEND .= "X-Priority: 3\r\n\r\n";
        }
        $SEND .=  $message."\r\n";
         if( !$socket = fsockopen($config['smtp_host'], $config['smtp_port'], $errno, $errstr, 30) ) {
              return false;
         }
 
            if (!server_parse($socket, "220", __LINE__)) return false;
 
            fputs($socket, "HELO " . $config['smtp_host'] . "\r\n");
            if (!server_parse($socket, "250", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, "AUTH LOGIN\r\n");
            if (!server_parse($socket, "334", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, base64_encode($config['smtp_username']) . "\r\n");
            if (!server_parse($socket, "334", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, base64_encode($config['smtp_password']) . "\r\n");
            if (!server_parse($socket, "235", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, "MAIL FROM: <".$config['smtp_username'].">\r\n");
            if (!server_parse($socket, "250", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, "RCPT TO: <" . $mail_to . ">\r\n");
 
            if (!server_parse($socket, "250", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, "DATA\r\n");
 
            if (!server_parse($socket, "354", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, $SEND."\r\n.\r\n");
 
            if (!server_parse($socket, "250", __LINE__)) {
               fclose($socket);
               return false;
            }
            fputs($socket, "QUIT\r\n");
            fclose($socket);
            return TRUE;
}
 
function server_parse($socket, $response, $line = __LINE__) {
        global $config;
    while (substr($server_response, 3, 1) != ' ') {
        if (!($server_response = fgets($socket, 256))) {
                  return false;
                }
    }
    if (!(substr($server_response, 0, 3) == $response)) {
                  return false;
        }
    return true;
}
?>