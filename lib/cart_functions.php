<?php
    if (isset($_POST['btn_inCart'])){
       addToCart($_POST["id"], $_POST["title"], $_POST["price"], $_POST['table']);       
    }

    if (isset($_POST['upd_id'])) {
        updateCart($_POST['p_count'], $_POST['upd_id']);
    }

    if (isset($_POST['del_id'])) {
        removeFromCart($_POST['del_id']);
    }

    function addToCart($id, $title, $price, $table){
        for ($i = 0; $i < $_SESSION['prod_count']; $i++){
            if ($id == $_SESSION['id'][$i] && $table == $_SESSION['table'][$i]){
                $_SESSION['product_count'][$i]++;
                productCol();
                summPrice();
                updateCartSum();
                $result = true;
            }            
        }
        if (!$result){
            $_SESSION['prod_count']++;
            $incart = $_SESSION['prod_count']-1;
            $_SESSION['id'][$incart] = $id;
            $_SESSION['title'][$incart] = $title;
            $_SESSION['price'][$incart] = $price;
            $_SESSION['table'][$incart] = $table;
            $_SESSION['product_count'][$incart] = 1;
            productCol();
            summPrice();
            updateCartSum();       
        }
    }

    function removeFromCart($delete_key){
        unset($_SESSION['id'][$delete_key]); 
        unset($_SESSION['price'][$delete_key]); 
        unset($_SESSION['title'][$delete_key]); 
        unset($_SESSION['table'][$delete_key]); 
        unset($_SESSION['product_count'][$delete_key]); 
        $_SESSION['prod_count']=$_SESSION['prod_count']-1; 
        sort($_SESSION['id']); 
        sort($_SESSION['price']); 
        sort($_SESSION['title']); 
        sort($_SESSION['table']); 
        sort($_SESSION['product_count']);
        productCol();
        summPrice();
        updateCartSum();
    }

    function updateCartSum() { 
        $_SESSION['cart_sum']=0; 
        for ($i=0; $i<$_SESSION['prod_count']; $i++) { 
        $_SESSION['cart_sum']=$_SESSION['cart_sum'] + $_SESSION['price'][$i]* $_SESSION['product_count'][$i]; 
        }
        echo "<meta http-equiv=\"refresh\" content=\"0;url=".$_SERVER['HTTP_REFERER']."\">"; 
    }

    function updateCart($cnt, $update_key) { 
        $_SESSION['product_count'][$update_key]=$cnt;
        productCol();
        summPrice();
        updateCartSum(); 
    }

    function productCol(){
        for ($i = 0; $i < $_SESSION['prod_count']; $i++){
            $prod_col = $prod_col + $_SESSION['product_count'][$i];
        }
        $_SESSION['prod_col'] = $prod_col;
    }

    function summPrice(){
        for ($i = 0; $i < $_SESSION['prod_count']; $i++){
            $summPrice = $summPrice + ($_SESSION['price'][$i]* $_SESSION['product_count'][$i]);
        }
        $_SESSION['summPrice'] = $summPrice;
    }

//    function getAllForCart($id, $table){
//        global $mysqli;
//        connectDB();
//        $table .= "s";
//        $result_set = $mysqli->query("SELECT * FROM `$table` WHERE id='$id'");
//        closeDB();
//        return $prod_in_cart = $result_set->fetch_assoc();
//    }

    function getUserID($email){
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `users` WHERE `email` = '".$email."'");
        $row = $result_set->fetch_assoc();
        closeDB();
        return $row["id"];
    }

    function addToCartTbl($first_name, $last_name, $email, $phone, $address, $order, $summ_price, $user_id){
        global $mysqli;
        connectDB();
        $success = $mysqli->query("INSERT INTO `orders` (`first_name`, `last_name`, `email`, `phone`, `address`, `order`, `summ_price`, `user_id`) VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$order', '$summ_price', '$user_id')");
        closeDB();
        return $success;
    }
    
    function addToFastOrders($name, $phone, $comment, $article, $title, $count){
        global $mysqli;
        connectDB();
        $success = $mysqli->query("INSERT INTO `fast_orders` (`name`, `phone`, `comment`, `article`, `title`, `count`) VALUES ('$name', '$phone', '$comment', '$article', '$title', '$count')");
        closeDB();
        return $success;
    }

    function getUserOrders($email){
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `orders` WHERE `email` = '$email'");
        closeDB();
        return resultSetToArray($result_set);
    }
?>