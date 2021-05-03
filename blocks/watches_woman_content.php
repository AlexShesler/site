<?php
    $watches_woman = getAllWatchesWoman();
    for ($i = 0; $i < count($watches_woman); $i++){
        $id = $watches_woman[$i]["id"];
        $title = $watches_woman[$i]["title"];
        $price = $watches_woman[$i]["price"];
        $new = $watches_woman[$i]["new"];
        $discount = $watches_woman[$i]["discount"];
        $table = 'woman_watch';
        include "intro_watches_woman_content.php";
    }
?>
<div class="clearfix"></div>