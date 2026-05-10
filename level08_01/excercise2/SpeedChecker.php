<?php
class SpeedChecker
{
    public function __construct(private int $speed){}

    public function getSpeedThreshold()
    {
        if($this->speed < 30){
            return "Too slow";
        }
        if($this->speed <= 60){
           return "Safe speed";
        }
        if($this->speed <= 80){
            return "Slight speeding";
        }
        if($this->speed <= 100){
            return "Moderate speeding";
        }else{
            return "Excessive speeding";
        }
    }
}
?>
