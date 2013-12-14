<?php
require_once __DIR__.'/../vendor/autoload.php';

use TravisCISample\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $this->assertEquals(10, Calculator::add(1, 9));
    }
}
