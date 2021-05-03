<?php
    $beads = getAllBeads();
    for ($i = 0; $i < count($beads); $i++){
        $id = $beads[$i]["id"];
        $title = $beads[$i]["title"];
        $price = $beads[$i]["price"];
        $new = $beads[$i]["new"];
        $discount = $beads[$i]["discount"];
        $table = 'bead';
        include "intro_beads_content.php";
    }
?>
<div class="clearfix"></div>