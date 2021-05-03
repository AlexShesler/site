<?php
    $watches_man = getAllWatchesMan();
    for ($i = 0; $i < count($watches_man); $i++){
        $id = $watches_man[$i]["id"];
        $title = $watches_man[$i]["title"];
        $price = $watches_man[$i]["price"];
        $new = $watches_man[$i]["new"];
        $discount = $watches_man[$i]["discount"];
        $table = 'man_watch';
        include "intro_watches_man_content.php";
    }
?>
<div class="clearfix"></div>