<div class="menu">
    <ul class="main_menu">
        <li><a href="index.php">Главная</a></li>
        <li><a href="../catalog.php">Каталог</a>
            <ul class="sub_menu">
                <li><a href="earrings.php">Серьги</a></li>
                <li><a href="beads.php">Украшения на шею</a></li>
                <li><a href="bracelets.php">Браслеты</a></li>
                <li><a href="rings.php">Кольца</a></li>
                <li><a href="kits.php">Комплекты украшений</a></li>
                <li><a href="bags.php">Сумки</a></li>
                <li><a href="man_watchs.php">Часы мужские</a></li>
                <li><a href="woman_watchs.php">Часы женские</a></li>
                <li><a href="glasses.php">Очки</a></li>
                <li><a href="tippets.php">Палантины</a></li>
            </ul>
        </li>
        <li><a href="discounts.php">Акции</a></li>
        <li><a href="delivery.php">Оплата и доставка</a></li>
        <li><a href="contacts.php">Контакты</a></li>
        <li><a href="http://vk.com/album-75666612_214109089" target="_blank">Отзывы</a></li>
        <li><a href="faq.php">FAQ</a></li>
        
        <?php
            if ((checkUser($_SESSION["email"], $_SESSION["password"])) && (isAdmin($_SESSION["email"]))){
                echo "<li><a href=\"/redaction/index.php\" target=\"_blank\">Админ-панель</a></li>";
            }
        ?>
    </ul>        
</div>