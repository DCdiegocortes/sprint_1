<?php

const BASE_COST = 0.10; // no magic numberss!!!!
const EXTRA_COST = 0.05;
const BASE_MINUTES = 3;

$callDuration = readline("Enter the call duration in minutes: " );

$callCost = calculateCostCall((float)$callDuration);
echo "The cost of the call is: " . $callCost . "\n";

function calculateCostCall($duration){
    if ($duration <= 0) {
        throw new InvalidArgumentException("Duration must be a positive number");
    }
    if ($duration <= BASE_MINUTES) {
        return BASE_COST;
    } else {
        return (($duration - BASE_MINUTES) * EXTRA_COST) + BASE_COST;
    }
}
?>
