<?php

$greeting = "Hello, world";

echo $greeting . "\n";

// String to upper case
echo strtoupper($greeting) . "\n";

// Get length
echo strlen($greeting) . "\n";
// Count characters without spaces
echo strlen(str_replace(" ", "", $greeting)) . "\n";

// Reverse string
echo strrev($greeting) . "\n";

// Concatenation
$phrase = "This is the PHP course";

echo $greeting . ", " . $phrase;

?>
