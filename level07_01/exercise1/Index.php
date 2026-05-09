<?php

$userNumberA = readline("Enter the first number: ");
$userNumberB = readline("Enter the second number: ");

try {
    $result = divisionCalculator($userNumberA, $userNumberB);
    echo $result;
} catch (InvalidArgumentException $e) {// captures the exception  and assigns it to the variable $e
    echo "Error: " . $e->getMessage();// getMessage() method to retrieve the error message from the exception object
}

function checkInputs($userNumberA, $userNumberB)
{
    if($userNumberB == "" || $userNumberA == "")
    {
    throw new InvalidArgumentException("Both inputs are required.");
    }
    if (!is_numeric($userNumberA) || !is_numeric($userNumberB))
    {
        throw new InvalidArgumentException("Both inputs must be numeric.");
    }
    if ($userNumberB == 0)
    {
        throw new InvalidArgumentException("Division by zero is not allowed.");
    }
}

function divisionCalculator($userNumberA, $userNumberB)
{
    checkInputs($userNumberA, $userNumberB);
        return $userNumberA / $userNumberB;

}

?>

