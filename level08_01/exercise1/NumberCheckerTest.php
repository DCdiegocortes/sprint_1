<?php
use PHPUnit\Framework\TestCase;// import TestCase class from PHPUnit framework for testing

require_once "NumberChecker.php";// include the NumberChecker class to be tested

class NumberCheckerTest extends TestCase // create new class for testing + extends TestCase
{
    public function testZeroIsNotPositive()
    {
        $zeroNumberChecker = new NumberChecker(0);
        $this->assertFalse($zeroNumberChecker->isPositive());
    }

    public function testNumberIsNegative()
    {
        $negativeNumberChecker = new NumberChecker(-5);
        $this->assertFalse($negativeNumberChecker->isPositive());
    }

    public function testNumberIsPositive()
    {
        $positiveNumberChecker = new NumberChecker(1);
        $this->assertTrue($positiveNumberChecker->isPositive());
    }

    public function testZeroIsEven()
    {
        $zeroNumberChecker = new NumberChecker(0);
        $this->assertTrue($zeroNumberChecker->isEven());
    }

    public function testNumberIsEven()
    {
        $evenNumberChecker = new NumberChecker(4);
        $this->assertTrue($evenNumberChecker->isEven());
    }

    public function testNumberIsNotEven()
    {
        $notEvenNumberChecker = new NumberChecker(5);
        $this->assertFalse($notEvenNumberChecker->isEven());
    }

}
?>