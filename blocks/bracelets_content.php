<?php
    $bracelets = getAllBracelets();
    for ($i = 0; $i < count($bracelets); $i++){
        $id = $bracelets[$i]["id"];
        $title = $bracelets[$i]["title"];
        $price = $bracelets[$i]["price"];
        $new = $bracelets[$i]["new"];
        $discount = $bracelets[$i]["discount"];
        $table = 'bracelet';
        include "intro_bracelets_content.php";
    }
?>
<div class="clearfix"></div>