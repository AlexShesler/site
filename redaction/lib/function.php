<?php
    function getAllAdmin($table){
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `$table`");
        closeDB();
        return resultSetToArray($result_set);
    }
    
    function getAllRingsAdmin(){
        return getAllAdmin("rings");
    }

    function getAllEarringsAdmin(){
        return getAllAdmin("earrings");
    }

    function getAllBeadsAdmin(){
        return getAllAdmin("beads");
    }

    function getAllBraceletsAdmin(){
        return getAllAdmin("bracelets");
    }

    function getAllKitsAdmin(){
        return getAllAdmin("kits");
    }

    function getAllHairsAdmin(){
        return getAllAdmin("hairs");
    }

    function getAllTippetsAdmin(){
        return getAllAdmin("tippets");
    }
    function getAllBagsAdmin(){
        return getAllAdmin("bags");
    }

    function getAllWatchesManAdmin(){
        return getAllAdmin("man_watchs");
    }

    function getAllWatchesWomanAdmin(){
        return getAllAdmin("woman_watchs");
    }

    function getAllCommentsAdmin(){
         return getAllAdmin("reviews");
    }

    function getAllNewItemsAdmin(){
         return getAllAdmin("new_items");
    }

    function getAllOrdersAdmin(){
         return getAllAdmin("orders");
    }

    function getAllFastOrdersAdmin(){
        return getAllAdmin("fast_orders");
    }
    
    function getAllDiscountsAdmin(){
        return getAllAdmin("discounts");
    }
    
    function getAllGlassesAdmin(){
        return getAllAdmin('glasses');
    }
?>