<?php

$wordList = ["pepe","lola","elias"];
$firstLetter = "j";
$solution = allContainCharacter($wordList,$firstLetter);

if($solution) {
    echo "all words contain the letter " . $firstLetter . "\n";
} else {
    echo "not all words contain the letter " . $firstLetter . "\n";
}

function allContainCharacter ($wordsList, $firstLetter){
    $firstLetter = strtoupper($firstLetter); // case insensitive
    foreach ($wordsList as $temporaryWordToCheck) {
        $temporaryWordToCheck = strtoupper($temporaryWordToCheck); // case insensitive
        $found = false;
        $length = strlen($temporaryWordToCheck); // avoid recalculating length in loop

        for ($i = 0;$i < $length; $i++) {
            if($temporaryWordToCheck[$i] === $firstLetter) { // case insensitive
            $found = true;
            break; //optimization
            }
        }
        if(!$found){
            return false;
        }
    }return true;
}

?>