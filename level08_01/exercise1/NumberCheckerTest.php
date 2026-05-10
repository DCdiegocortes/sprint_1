<?php
use PHPUnit\Framework\TestCase;// import TestCase class from PHPUnit framework for testing

require_once "NumberChecker.php";// include the NumberChecker class to be tested

class NumberCheckerTest extends TestCase // create new class for testing + extends TestCase
{
    public function testIsPositive()
    {
        $zeroNumberChecker = new NumberChecker(0);
        $this->assertFalse($zeroNumberChecker->isPositive());
    }
    public function testIsEven()
    {
        $evenNumberChecker = new NumberChecker(4);
        $this->assertTrue($evenNumberChecker->isEven()); // assertTrue = because 4 is even
    }

    public function testIsNotEven()
    {
        $notEvenNumberChecker = new NumberChecker(5);
        $this->assertFalse($notEvenNumberChecker->isEven()); // assertFalse = because 5 is not even
    }

}

?>