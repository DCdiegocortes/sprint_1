<?php
$userAverageLevel = readline("Enter the student's average level: " );

$result = checkStudentAverageLevel($userAverageLevel);
echo $result;

function checkStudentAverageLevel($userAverageLevel){
    if($userAverageLevel == ""){
        throw new InvalidArgumentException("Average level cannot be empty");
    }
    if($userAverageLevel <= 0 || $userAverageLevel > 100){
        throw new InvalidArgumentException("Average level must be between 1 and 100");
    }
    if ($userAverageLevel >= 60) {
        return "First division";
    }elseif (($userAverageLevel >=45)  && ($userAverageLevel <= 59)){
            return "Second division";
    }elseif (($userAverageLevel >= 33) && ($userAverageLevel <= 44)) {
        return "Third division";
    }else {
        return "Failing";
    }
}

?>

