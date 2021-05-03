<?php
    $kits = getAllKits();
    for ($i = 0; $i < count($kits); $i++){
        $id = $kits[$i]["id"];
        $title = $kits[$i]["title"];
        $price = $kits[$i]["price"];
        $new = $kits[$i]["new"];
        $discount = $kits[$i]["discount"];
        $table = 'kit';
        include "intro_kits_content.php";
    }
?>
<div class="clearfix"></div>