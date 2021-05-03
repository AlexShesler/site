<?php
    $tippets = getAllTippets();
    for ($i = 0; $i < count($tippets); $i++){
        $id = $tippets[$i]["id"];
        $title = $tippets[$i]["title"];
        $price = $tippets[$i]["price"];
        $new = $tippets[$i]["new"];
        $discount = $tippets[$i]["discount"];
        $table = 'tippet';
        include "intro_tippets_content.php";
    }
?>
<div class="clearfix"></div>