<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * Test the addition method.
     *
     * @return void
     */
    public function testAdd()
    {
        $calculator = new Calculator();

        // Test the add method
        $this->assertEquals(5, $calculator->add(2, 3));
        $this->assertEquals(0, $calculator->add(-2, 2));
        $this->assertEquals(-5, $calculator->add(-3, -2));
    }

    /**
     * Test the subtraction method.
     *
     * @return void
     */
    public function testSubtract()
    {
        $calculator = new Calculator();

        // Test the subtract method
        $this->assertEquals(1, $calculator->subtract(3, 2));
        $this->assertEquals(-4, $calculator->subtract(-2, 2));
        $this->assertEquals(-1, $calculator->subtract(-3, -2));
    }
}
