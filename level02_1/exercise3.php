<?php

$x = 5;
$y = 15;
$n = 7.5;
$m = 10.3;

//arithmetic operations for x and y
echo "Values:\n";
echo "x: " . $x . "\n";
echo "y: " . $y . "\n";
echo "addition: " . ($x + $y) . "\n";
echo "subtraction: " . $y . " - " . $x . " = " . ($y - $x) . "\n";
echo "subtraction: " . $x . " - " . $y . " = " . ($x - $y) . "\n";
echo "multiplication: " . ($x * $y) . "\n";
echo "division: " . ($y / $x) . "\n";
echo "modulo: " . ($y % $x) . "\n";

//arithmetic operations for n and m
echo "Values:\n";
echo "n: " . $n . "\n";
echo "m: " . $m . "\n";
echo "addition: " . ($n + $m) . "\n";
echo "subtraction: " . $n . " - " . $m . " = " . ($n - $m) . "\n";
echo "subtraction: " . $m . " - " . $n . " = " . ($m - $n) . "\n";
echo "multiplication: " . ($n * $m) . "\n";
echo "division: " . ($n / $m) . "\n";
echo "modulo: " . ($n % $m) . "\n";// Modulo is only applied to integer values : echo "modulo: " . fmod($n, $m) . "\n"

//double of each variable
echo "double of x: " . ($x * 2) . "\n";
echo "double of y: " . ($y * 2) . "\n";
echo "double of n: " . ($n * 2) . "\n";
echo "double of m: " . ($m * 2) . "\n";

//sum of all variables
echo "sum of all variables: " . ($x + $y + $n + $m) . "\n";

//multiplication of all variables
echo "multiplication of all variables: " . ($x * $y * $n * $m) . "\n";

//part B
$a = (float) readline ("enter a number: " );
$b = (float) readline ("enter another number:");
$operation = readline ("enter the operation (add, subtract, multiply, divide): ");
$operation = strtolower($operation);

//validations
if ($operation != "add" && $operation != "subtract" &&
    $operation != "multiply" && $operation != "divide") {
    echo "Invalid operation \n";
} else {
    $result = calculate($a, $b, $operation);
    echo "Result: " . $result . "\n";
}

function calculate($a, $b, $operation) {
    switch ($operation) {
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        case 'multiply':
            return $a * $b;
        case 'divide':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Division by zero is not allowed.";
            }
        default:
            return "Invalid operation.";
    }
}

?>
