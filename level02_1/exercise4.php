<?php

$userValue = readline ("enter a number: " ); // no cast !!
$step = readline ("enter the step: " );

if ($userValue == "" && $step == "") { // call countUp with  full default values
    countUp();
    }elseif ($userValue == "" && $step != "") { // NO MAGIC NUMBERS !! NO HARDCODEO!!
    throw new InvalidArgumentException("step cannot be set if userValue is not provided");
    } elseif ($userValue != "" && $step == "") { //  call countUp with userValue and default step
    countUp((float)$userValue);
    } elseif ($userValue != "" && $step != "") { // call countUp with userValue and step
    countUp((float)$userValue, (float)$step); // casts  input values
   }

 function countUp ($userValue = 10, $step = 1 ) {// asigned FIXED values in parameters
     if ($step <= 0) { //
         throw new InvalidArgumentException("step must be a positive number");
     }
    for($i = 1; $i <= $userValue; $i += $step) {
        echo $i . "\n";
        }
 }

?>
