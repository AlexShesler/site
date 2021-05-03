<?php
    $glasses = getAllGlasses();
    for ($i = 0; $i < count($glasses); $i++){
        $id = $glasses[$i]["id"];
        $title = $glasses[$i]["title"];
        $price = $glasses[$i]["price"];
        $article = $glasses[$i]["article"];
        $new = $glasses[$i]["new"];
        $discount = $glasses[$i]["discount"];
        $table = 'glasse';
        include "intro_glasses_content.php";
    }
?>
<div class="clearfix"></div>