<?php
    $rings = getAllRings();
    for ($i = 0; $i < count($rings); $i++){
        $id = $rings[$i]["id"];
        $title = $rings[$i]["title"];
        $price = $rings[$i]["price"];
        $new = $rings[$i]["new"];
        $discount = $rings[$i]["discount"];
        $table = 'ring';
        include "intro_rings_content.php";
    }
?>
<div class="clearfix"></div>