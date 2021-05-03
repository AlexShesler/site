<div class="result_search_header">
    <h2>Результаты поиска</h2>
</div>
<?php
    if ((isset($_GET["btn_search"])) && (strlen($_GET["words"]) > 2)){
//        print_r ($_GET);
        $words = htmlspecialchars($_GET["words"]);
        $results = getAllThings($words);
        if (count($results) != 0){
            for ($i = 0; $i < count($results); $i++){
                $id = $results[$i]["id"];
                $title = $results[$i]["title"];
                $price = $results[$i]["price"];
                $table = $results[$i]["table"];
                $new = $results[$i]["new"];
                include "search_item.php";
            }
        }
        else echo '<p class="result_search_fail">Поиск не дал результатов. Попробуйте сформулировать запрос по другому.</p>';
    }
    else if(strlen($_GET["words"]) < 3) echo '<p class="result_search_fail">Слишком короткий запрос</p>';
    else echo '<p class="result_search_fail">Не задан поисковый запрос</p>';
?>


