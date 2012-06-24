<?php
include "../PerfectNumber.php";

class PerfectNumberTest extends PHPUnit_Framework_TestCase
{
    public function testNumber1()
    {
        $perfectNumber = new PerfectNumber();
        $this->assertEquals(null, $perfectNumber(1));
    }

    public function testNumber2()
    {
        $perfectNumber = new PerfectNumber();
        $this->assertEquals(null, $perfectNumber(2));
    }

    public function testNumber5()
    {
        $perfectNumber = new PerfectNumber();
        $this->assertEquals(null, $perfectNumber(5));
    }

    public function testNumber6()
    {
        $perfectNumber = new PerfectNumber();
        $this->assertEquals(6, $perfectNumber(6));
    }

    public function testNumber7()
    {
        $perfectNumber = new PerfectNumber();
        $this->assertEquals(6, $perfectNumber(7));
    }

    public function testNumber28()
    {
        $perfectNumber = new PerfectNumber();
        $this->assertEquals(28, $perfectNumber(28));
    }

    public function testNumber30()
    {
        $perfectNumber = new PerfectNumber();
        $this->assertEquals(28, $perfectNumber(30));
    }

    public function testNumber496()
    {
        $perfectNumber = new PerfectNumber();
        $this->assertEquals(496, $perfectNumber(496));
    }

    public function testNumber511()
    {
        $perfectNumber = new PerfectNumber();
        $this->assertEquals(496, $perfectNumber(511));
    }
}
