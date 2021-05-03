<!--
<div class="action">
    <span>До 1 июля скидка на все товары 10%</span>
</div>
-->
<div class="slides">
    <div>
        <a href="earrings.php">
            <img src="../images/slides/pic_1.jpg" alt="Серьги" />
        </a>
        <span>Стильная деталь<br/>твоего "Я"</span>
    </div>
    <div>
        <a href="beads.php">
            <img src="../images/slides/pic_2.jpg" alt="Украшения на шею" />
        </a>
        <span>Время создавать<br/>свой стиль</span>
    </div>
    <div>
        <a href="bracelets.php">
            <img src="../images/slides/pic_3.jpg" alt="Браслеты" />
        </a>
        <span>Мы создаем<br/>красоту и успех</span>
    </div>
    <div>
        <a href="watches_woman.php">
            <img src="../images/slides/pic_4.jpg" alt="Часы женские" />
        </a>
        <span>Управляйте своим временем</span>
    </div>
</div>
<!--Вместо слайдера для IE-->
<div  class="slides_ie">
    <div>
        <a href="catalog.php">
            <img src="../images/slides/pic_1.jpg" alt="каталог" />
        </a>
        <span class="ie_span">Стильная деталь<br/>твоего "Я"</span>
    </div>
</div>
<div class="clearfix"></div>
<!---->
<h2 class="main_h2">Новинки</h2>
<div class="new_items clearfix">
    <?php
        $new_items = getNew();
        for ($i = 0; $i < count($new_items); $i++){
            $id = $new_items[$i]["id"];
            $title = $new_items[$i]["title"];
            $price = $new_items[$i]["price"];
            $description = $new_items["description"];
            $table = $new_items[$i]["table"];
            include "intro_new_items_content.php";
        }
    ?>
</div>