<?php
    $bags = getAllBags();
    for ($i = 0; $i < count($bags); $i++){
        $id = $bags[$i]["id"];
        $title = $bags[$i]["title"];
        $price = $bags[$i]["price"];
        $article = $bags[$i]["article"];
        $new = $bags[$i]["new"];
        $discount = $bags[$i]["discount"];
        $table = 'bag';
        include "intro_bags_content.php";
    }
?>
<div class="clearfix"></div>