<?php

$guestList1 = ["Alice", "Pepe", "Charlie", "David", "Eve"];
$guestList2 = ["Claire", "Loise","Eve", "Jack", "Charlie"];

$commonGuestList = [];// stores names  found in both arrays
foreach ($guestList1 as $temporaryGuest) {// using nested loops and flags
    $found = false;
    foreach ($guestList2 as $temporaryGuest2) {
        if ($temporaryGuest === $temporaryGuest2) {
            $found = true;
            break; // break iteration when it finds a match optimization
        }
    }
    if($found){
        $commonGuestList[] = $temporaryGuest;
    }
}
echo "Common guests:\n";
foreach ($commonGuestList as $commonGuest) {
    echo $commonGuest . "\n";
}

$mergedList = $guestList1;
foreach ($guestList2 as $temporaryGuest){
    $found = false;
    foreach ($mergedList as $temporaryExistingGuest){
        if ($temporaryGuest === $temporaryExistingGuest) {
            $found = true;
            break;
        }
    }
    if (!$found){
        $mergedList[] = $temporaryGuest;
    }
}
echo "\n" . "Merged list:\n";
foreach ($mergedList as $guest) {
    echo $guest . "\n";
}

$exclusiveGuestList1 = [];// stores names  found only in guestList1
foreach ($guestList1 as $temporaryGuest) {// using nested loops and flags
    $found = false;
    foreach ($guestList2 as $temporaryGuest2) {
        if ($temporaryGuest === $temporaryGuest2) {
            $found = true;
            break;
        }
    }
    if(!$found){
        $exclusiveGuestList1[] = $temporaryGuest;
    }
}
echo "\n" . "Exclusive guests from lists 1 :\n";
foreach ($exclusiveGuestList1 as $exclusiveGuest) {
    echo $exclusiveGuest . "\n";
}
$exclusiveGuestList2 = [];// stores names  found only in guestList2
foreach ($guestList2 as $temporaryGuest) {// using nested loops and flags
    $found = false;
    foreach ($guestList1 as $temporaryGuest2) {
        if ($temporaryGuest === $temporaryGuest2 ) {
            $found = true;
            break;
        }
    }
    if(!$found){
        $exclusiveGuestList2[] = $temporaryGuest;
    }
}
echo "\n" . "Exclusive guests from lists 2 :\n";
foreach ($exclusiveGuestList2 as $exclusiveGuest) {
    echo $exclusiveGuest . "\n";
}

?>
