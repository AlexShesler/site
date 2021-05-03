<?php
    define(num_of_page, 12);

    $mysqli = false;
    function connectDB(){
        global $mysqli;
        $mysqli = new mysqli("localhost", "user9038_db", "12flfvcvbn21", "user9038_db");
        $mysqli->query("SET NAMES 'utf8'");
    }
    
    function closeDB(){
        global $mysqli;
        $mysqli->close();
    }

    function resultSetToArray($result_set){
        $array = array();
        while (($row = $result_set->fetch_assoc()) != false)
            $array[] = $row;
        return $array;
    }

    function getNumOfPage($table){
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT COUNT(*) FROM `$table` WHERE `showround` = '1'");
        if ($result_set){
            $result_set = $result_set->fetch_assoc();
            $result_set = ceil($result_set['COUNT(*)']/num_of_page);
        }
        return $result_set;
    }

    function pagination($pages, $table){
        $p = $_GET['p'];
        echo '<a href="'.$table.'.php?p=0">'."<<".'</a>';
        for ($i = 0; $i < $pages; $i++){
            if ($p == $i) echo '<a class="page_link_active" href="'.$table.'.php?p='.$i.'">'.($i+1)." ".'</a>';
            else echo '<a class="pagin_link" href="'.$table.'.php?p='.$i.'">'.($i+1)." ".'</a>';
        }
        echo '<a href="'.$table.'.php?p='.($pages - 1).'">'.">>".'</a>';
    }
    
    function getAll($table){
        $p = $_GET['p'];
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `$table` WHERE `showround` = '1' LIMIT ".$p*num_of_page.", ".num_of_page);
        closeDB();
        return resultSetToArray($result_set);
    }
    
    function getAllRings(){
        return getAll("rings");
    }

    function getAllEarrings(){
        return getAll("earrings");
    }

    function getAllBeads(){
        return getAll("beads");
    }

    function getAllBracelets(){
        return getAll("bracelets");
    }

    function getAllKits(){
        return getAll("kits");
    }

    function getAllHairs(){
        return getAll("hairs");
    }

    function getAllTippets(){
        return getAll("tippets");
    }
    function getAllBags(){
        return getAll("bags");
    }

    function getAllWatchesMan(){
        return getAll("man_watchs");
    }
    function getAllWatchesWoman(){
        return getAll("woman_watchs");
    }

    function getAllComments(){
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `reviews`");
        closeDB();
        return resultSetToArray($result_set);
    }

    function getAllNewItems(){
         return getAll("new_items");
    }

    function getAllOrders(){
         return getAll("orders");
    }

    function getAllFastOrders(){
        return getAll("fast_orders");
    }
    
    function getAllDiscounts(){
        //return getAll("discounts");
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `discounts`");
        closeDB();
        return resultSetToArray($result_set);        
    }
    
    function getAllGlasses(){
        return getAll('glasses');
    }

    function getOne($id, $table){
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `$table` WHERE `id` = '$id'");
        closeDB();
        return $result_set->fetch_assoc();
    }

    function getGlass($id){
        return getOne($id, "glasses");
    }

    function getRing($id){
        return getOne($id, "rings");
    }   

    function getEarring($id){
        return getOne($id, "earrings");
    }    

    function getBead($id){
        return getOne($id, "beads");
    }    

    function getBracelet($id){
        return getOne($id, "bracelets");
    }

    function getKit($id){
        return getOne($id, "kits");
    }

    function getHair($id){
        return getOne($id, "hairs");
    }

    function getTippet($id){
        return getOne($id, "tippets");
    }

    function getBag($id){
        return getOne($id, "bags");
    }

    function getNewItem($id){
        return getOne($id, "new_items");
    }

    function getWatchesMan($id){
        return getOne($id, "man_watchs");
    }

    function getWatchesWoman($id){
        return getOne($id, "woman_watchs");
    }

    function addReviewsComment($name, $comment, $date){
        global $mysqli;
        connectDB();
        $success = $mysqli->query("INSERT INTO `reviews` (`name`,`comment`, `date`) VALUES ('$name','$comment', '$date')");
        closeDB();
        return $success;
    }

    function addUser($name, $last_name, $email, $pass){
        global $mysqli;
        connectDB();
        $success = $mysqli->query("INSERT INTO `users` (`name`,`last_name`, `email`, `pass`) VALUES ('$name','$last_name', '$email', '$pass')");
        closeDB();
        return $success;
    }
    
    function checkUser($email, $password){
        if (($email == "") || ($password == "")) return false;
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
        closeDB();
        $row = $result_set->fetch_assoc();
        $real_password = $row["password"];
        if ($real_password != $password) return false;
        else return true;
    }
// Функция поиска
    function getAllThings($words){
        $query_search = "";
        $array_words = explode(" ", $words);
        foreach ($array_words as $key => $value){
            if (isset($array_words[$key - 1])) $query_search .= " OR ";
            $query_search .= "(`title` LIKE '%$value%' OR `article` LIKE '%$value%')";
        }
        global $mysqli;
        connectDB(); 
        
        $query_rings = "SELECT * , 'ring' AS 'table' FROM `rings` WHERE $query_search";
        $query_beads = "SELECT * , 'bead' AS 'table' FROM `beads` WHERE $query_search";
        $query_bracelets = "SELECT * , 'bracelet' AS 'table' FROM `bracelets` WHERE $query_search";
        $query_earrings = "SELECT * , 'earring' AS 'table' FROM `earrings` WHERE $query_search";
        $query_kits = "SELECT * , 'kit' AS 'table' FROM `kits` WHERE $query_search";
        $query_tippets = "SELECT * , 'tippet' AS 'table' FROM `tippets` WHERE $query_search";
        $query_bags = "SELECT * , 'bag' AS 'table' FROM `bags` WHERE $query_search";
        $query_man_watchs = "SELECT * , 'man_watch' AS 'table' FROM `man_watchs` WHERE $query_search";
        $query_woman_watchs = "SELECT * , 'woman_watch' AS 'table' FROM `woman_watchs` WHERE $query_search";
        $query_glasses = "SELECT * , 'glasse' AS 'table' FROM `glasses` WHERE $query_search"; 
            
        $result_set = $mysqli->query("$query_rings UNION $query_beads UNION $query_bracelets UNION $query_earrings UNION $query_kits UNION $query_bags UNION $query_man_watchs UNION $query_woman_watchs UNION $query_glasses UNIOU $query_tippets");
        
//        echo "$query_rings UNION $query_beads UNION $query_bracelets UNION $query_earrings UNION $query_kits UNION $query_weddings UNION $query_bags UNION $query_man_watchs UNION $query_woman_watchs";
        
        closeDB();
        return resultSetToArray($result_set);
    }

    function isAdmin($email){
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
        $row = $result_set->fetch_assoc();
        closeDB();
        return $row["admin"];
    }

    function getUserName($email){
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
        $row = $result_set->fetch_assoc();
        closeDB();
        return $row["name"];
    }

    function getID($article, $table){
        global $mysqli;
        connectDB();
        $table = $table."s";
        $result_set = $mysqli->query("SELECT * FROM `".$table."` WHERE `article` = '".$article."'");
        $row = $result_set->fetch_assoc();
        closeDB();
        return $row["id"];
    }

    function getUserLastName($email){
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
        $row = $result_set->fetch_assoc();
        closeDB();
        return $row["last_name"];
    }

    function getNew(){
        global $mysqli;
        connectDB(); 
        
        $query_rings = "SELECT * , 'ring' AS 'table' FROM `rings` WHERE `new` = '1' AND `showround` != '0'";
        $query_beads = "SELECT * , 'bead' AS 'table' FROM `beads` WHERE `new` = '1' AND `showround` != '0'";
        $query_bracelets = "SELECT * , 'bracelet' AS 'table' FROM `bracelets` WHERE `new` = '1' AND `showround` != '0'";
        $query_earrings = "SELECT * , 'earring' AS 'table' FROM `earrings` WHERE `new` = '1' AND `showround` != '0'";
        $query_kits = "SELECT * , 'kit' AS 'table' FROM `kits` WHERE `new` = '1' AND `showround` != '0'";
        $query_tippets = "SELECT * , 'tippet' AS 'table' FROM `tippets` WHERE `new` = '1' AND `showround` != '0'";
        $query_bags = "SELECT * , 'bag' AS 'table' FROM `bags` WHERE `new` = '1' AND `showround` != '0'";
        $query_man_watchs = "SELECT * , 'man_watch' AS 'table' FROM `man_watchs` WHERE `new` = '1' AND `showround` != '0'";
        $query_woman_watchs = "SELECT * , 'woman_watch' AS 'table' FROM `woman_watchs` WHERE `new` = '1' AND `showround` != '0'";
        $query_glasses = "SELECT * , 'glasse' AS 'table' FROM `glasses` WHERE `new` = '1' AND `showround` != '0'";
            
        $result_set = $mysqli->query("$query_rings UNION $query_beads UNION $query_bracelets UNION $query_earrings UNION $query_kits UNION $query_bags UNION $query_man_watchs UNION $query_woman_watchs UNION $query_glasses UNION $query_tippets LIMIT 9");
        
//        echo "$query_rings UNION $query_beads UNION $query_bracelets UNION $query_earrings UNION $query_kits UNION $query_weddings UNION $query_bags UNION $query_man_watchs UNION $query_woman_watchs LIMIT 6";
        
        closeDB();
        return resultSetToArray($result_set);
    }

    function isIE(){
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $browserIE = false;
        if( preg_match( '/msie/i', $user_agent ) ) $browserIE = true;
        return $browserIE;
    }

    function getNewAdmin(){
        global $mysqli;
        connectDB(); 
        
        $query_rings = "SELECT * , 'ring' AS 'table' FROM `rings` WHERE `new` = '1'";
        $query_beads = "SELECT * , 'bead' AS 'table' FROM `beads` WHERE `new` = '1'";
        $query_bracelets = "SELECT * , 'bracelet' AS 'table' FROM `bracelets` WHERE `new` = '1'";
        $query_earrings = "SELECT * , 'earring' AS 'table' FROM `earrings` WHERE `new` = '1'";
        $query_kits = "SELECT * , 'kit' AS 'table' FROM `kits` WHERE `new` = '1'";
        $query_tipetts = "SELECT * , 'tippet' AS 'table' FROM `tippets` WHERE `new` = '1'";
        $query_bags = "SELECT * , 'bag' AS 'table' FROM `bags` WHERE `new` = '1'";
        $query_man_watchs = "SELECT * , 'man_watch' AS 'table' FROM `man_watchs` WHERE `new` = '1'";
        $query_woman_watchs = "SELECT * , 'woman_watch' AS 'table' FROM `woman_watchs` WHERE `new` = '1'";
        $query_glasses = "SELECT * , 'glasse' AS 'table' FROM `glasses` WHERE `new` = '1'";
            
        $result_set = $mysqli->query("$query_rings UNION $query_beads UNION $query_bracelets UNION $query_earrings UNION $query_kits UNION $query_bags UNION $query_man_watchs UNION $query_woman_watchs UNION $query_glasses UNION $query_tippets");
        
        closeDB();
        return resultSetToArray($result_set);
    }

    function getUserRegDate($email){
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");
        $row = $result_set->fetch_assoc();
        closeDB();
        return $row["date_reg"];
    }
?>