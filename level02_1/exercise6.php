<?php

echo isBitten() ? "Charlie bit you :P" : "You are safe for now....";

function isBitten() {
    return rand(0,1) === 1 ; // rand() + range > random
}

?>
