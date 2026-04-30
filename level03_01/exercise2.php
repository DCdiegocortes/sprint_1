<?php

$gamesList = ["pokemon sword","super mario brothers","dragon ball ultimate",
               "zelda breath of the wild"];

echo count($gamesList) . "\n"; //array size

unset($gamesList[1]); //delete element in index 1

$gamesList = array_values($gamesList);//reindexar array

echo count($gamesList) . "\n";

foreach ($gamesList as $game) {
    echo $game . "\n";
}

?>
