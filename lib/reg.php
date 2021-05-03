<?php
    require_once "start.php";

    $connection =  mysqli_connect("localhost", "user9038_db", "12flfvcvbn21", "user9038_db");

    if (isset ($_POST['btn_reg'])){
        
        $email = htmlspecialchars(trim($_POST['email']));
        $query_mail = "SELECT `email` FROM `users` WHERE `email`='".$email."'";
        $result_select_mail = mysqli_query($connection, $query_mail);
        $result_mail = $result_select_mail->fetch_assoc();
        
        $captcha = md5(htmlspecialchars($_POST['captcha']));
        
        $part_one =  substr($_SESSION['captcha'], 0, 10);
        $part_two =  substr($_SESSION['captcha'], 12, 10);
        $part_three =  substr($_SESSION['captcha'], 24, 12);

        $captcha_ses = $part_one.$part_two.$part_three;
        
        if ($_POST['pass_1'] != $_POST['pass_2']){
            $alert = 'Пароли не совпадают. Повторите ввод.';
            include 'lib/alert.php';
            $_SESSION['name_reg'] = htmlspecialchars($_POST['name_reg']);
            $_SESSION['last_name'] = htmlspecialchars($_POST['last_name']);
            $_SESSION['email_reg'] = htmlspecialchars($_POST['email_reg']);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
            exit();
        }
        else if (strlen($_POST['pass_1']) < 6){
            $alert = 'Минимальная длинна пароля 6 символов';
            include 'lib/alert.php';
            $_SESSION['name_reg'] = htmlspecialchars($_POST['name_reg']);
            $_SESSION['last_name'] = htmlspecialchars($_POST['last_name']);
            $_SESSION['email_reg'] = htmlspecialchars($_POST['email_reg']);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
            exit();
        }
        else if (!empty($result_mail['email'])){
            $alert = 'Введенный e-mail уже зарегистрирован на сайте.';
            include 'lib/alert.php';
            $_SESSION['name_reg'] = htmlspecialchars($_POST['name_reg']);
            $_SESSION['last_name'] = htmlspecialchars($_POST['last_name']);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
            exit();
        }
        else if ($captcha_ses != $captcha){
            $alert = "Не верно введен код безопасности";
            include "lib/alert.php";
            $_SESSION['name_reg'] = htmlspecialchars($_POST['name_reg']);
            $_SESSION['last_name'] = htmlspecialchars($_POST['last_name']);
            $_SESSION['email_reg'] = htmlspecialchars($_POST['email_reg']);
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">";
            exit();
        }
        else{
            $name = htmlspecialchars(trim($_POST['name_reg']));
            $last_name = htmlspecialchars(trim($_POST['last_name']));
            $email = htmlspecialchars(trim($_POST['email_reg']));
            $pass_1 = htmlspecialchars(trim($_POST['pass_1']));
            $pass_2 = htmlspecialchars(trim($_POST['pass_2']));
            $password = md5($pass_1);
            $date_reg = date("Y-m-j");


            $query = "INSERT INTO `users` (`name`, `last_name`, `email`, `password`, `date_reg`) VALUES ('$name', '$last_name', '$email', '$password', '$date_reg')";

            $result = mysqli_query($connection, $query) or die(mysql_error());

            $alert = 'Вы успешно зарегистрировались';
            include 'alert.php';
            
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['name'] = getUserName($email);
            
            unset($_SESSION['name_reg']);
            unset($_SESSION['last_name']);
            unset($_SESSION['email_reg']);
            
            echo "<meta http-equiv=\"refresh\" content=\"0;url=".'../index.php'."\">";
            exit();
        }
//        if (strlen($pass_1) < 3) $success = false;
//        elseif ($pass_1 != $pass_2) $success = false;
//        else $success = addUser($name, $last_name, $email, md5(pass_1));
//        
//        if (!$saccess) $alert = 'Ошибка при регистрации! Попробуйте снова.';
//        else $alert = 'Вы успешно зарегистрировались!';
//        include 'alert.php';
    }    
?>
