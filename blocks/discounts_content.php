<div class="content_tbl">
    <?php
        $discounts = getAllDiscounts();
        for ($i = 0; $i < count($discounts); $i++){
            $id = $discounts[$i]['id'];
            $title = $discounts[$i]['title'];
            $desctiption = $discounts[$i]['description'];
            include "intro_discount.php";
        }
    ?>
</div>