<?php

use PHPUnit\Framework\TestCase;// import !!!!

require_once "SpeedChecker.php";

class SpeedCheckerTest extends TestCase
{
    public function testReturnTooSlow()
    {
        $speedChecker = new SpeedChecker(29);
        $this->assertEquals("Too slow", $speedChecker->getSpeedThreshold()); //assertEquals : strings
    }
    public function testReturnSafeSpeedForThirty()
    {
        $speedChecker = new SpeedChecker(30);
        $this->assertEquals("Safe speed", $speedChecker->getSpeedThreshold());

    }
    public function testReturnSafeSpeed()
    {
        $speedChecker = new SpeedChecker(59);
        $this->assertEquals("Safe speed", $speedChecker->getSpeedThreshold());
    }
    public function testReturnSafeSpeedForSixty()
    {
        $speedChecker = new SpeedChecker(60);
        $this->assertEquals("Safe speed", $speedChecker->getSpeedThreshold());
    }
    public function testReturnSlightSpeeding()
    {
        $speedChecker = new SpeedChecker(61);
        $this->assertEquals("Slight speeding", $speedChecker->getSpeedThreshold());
    }
    public function testReturnSlightSpeedingForEighty()
    {
        $speedChecker = new SpeedChecker(80);
        $this->assertEquals("Slight speeding", $speedChecker->getSpeedThreshold());

    }
    public function testReturnModerateSpeeding()
    {
        $speedChecker = new SpeedChecker(99);
        $this->assertEquals("Moderate speeding", $speedChecker->getSpeedThreshold());
    }
    public function testReturnModerateSpeedingForHundred()
    {
        $speedChecker = new SpeedChecker(100);
        $this->assertEquals("Moderate speeding", $speedChecker->getSpeedThreshold());
    }
    public function testReturnExcessiveSpeeding()
    {
        $speedChecker = new SpeedChecker(101);
        $this->assertEquals("Excessive speeding", $speedChecker->getSpeedThreshold());
    }
}

?>
