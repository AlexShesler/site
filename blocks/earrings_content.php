<?php
    $earrings = getAllEarrings();
    for ($i = 0; $i < count($earrings); $i++){
        $id = $earrings[$i]["id"];
        $title = $earrings[$i]["title"];
        $price = $earrings[$i]["price"];
        $new = $earrings[$i]["new"];
        $discount = $earrings[$i]["discount"];
        $table = 'earring';
        include "intro_earrings_content.php";
    }
?>
<div class="clearfix"></div>