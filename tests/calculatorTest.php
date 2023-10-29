<?php
require_once __DIR__ . '/../src/calculatorClass.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    public function testAddition() {
        $calc = new Calculator();
        $result = $calc->add(5, 3);
        $this->assertEquals(9, $result);
    }

    public function testSubtraction() {
        $calc = new Calculator();
        $result = $calc->subtract(10, 4);
        $this->assertEquals(6, $result);
    }

    public function testMultiplication() {
        $calc = new Calculator();
        $result = $calc->multiply(6, 2);
        $this->assertEquals(12, $result);
    }

    public function testDivision() {
        $calc = new Calculator();
        $result = $calc->divide(8, 2);
        $this->assertEquals(4, $result);
    }

    public function testDivisionByZero() {
        $calc = new Calculator();
        $result = $calc->divide(10, 0);
        $this->assertEquals("Division by zero is not allowed.", $result);
    }

    public function testNegativeNumbers() {
        $calc = new Calculator();
        $result = $calc->add(-5, 5);
        $this->assertEquals(0, $result);
    }

    public function testFloatNumbers() {
        $calc = new Calculator();
        $result = $calc->multiply(2.5, 3);
        $this->assertEquals(7.5, $result);
    }
    
    public function testLargeNumbers() {
        $calc = new Calculator();
        $result = $calc->add(PHP_INT_MAX, 1);
        $this->assertEquals(PHP_INT_MAX + 1, $result);
    }

    public function testZeroDivisionByZero() {
        $calc = new Calculator();
        $result = $calc->divide(0, 0);
        $this->assertEquals("Division by zero is not allowed.", $result);
    }

    public function testNegativeDivision() {
        $calc = new Calculator();
        $result = $calc->divide(-10, 2);
        $this->assertEquals(-5, $result);
    }

    public function testZeroMultiplication() {
        $calc = new Calculator();
        $result = $calc->multiply(0, 5);
        $this->assertEquals(0, $result);
    }

    public function testZeroAddition() {
        $calc = new Calculator();
        $result = $calc->add(0, 0);
        $this->assertEquals(0, $result);
    }

    public function testZeroSubtraction() {
        $calc = new Calculator();
        $result = $calc->subtract(0, 0);
        $this->assertEquals(0, $result);
    }

    public function testZeroMultiplicationByNegative() {
        $calc = new Calculator();
        $result = $calc->multiply(0, -5);
        $this->assertEquals(0, $result);
    }

    public function testZeroAdditionWithNegative() {
        $calc = new Calculator();
        $result = $calc->add(0, -10);
        $this->assertEquals(-10, $result);
    }

    public function testMultiplicationByZero() {
        $calc = new Calculator();
        $result = $calc->multiply(5, 0);
        $this->assertEquals(0, $result);
    }
    
    public function testNegativeMultiplication() {
        $calc = new Calculator();
        $result = $calc->multiply(-5, 3);
        $this->assertEquals(-15, $result);
    }
    
    public function testSubtractionResultIsNegative() {
        $calc = new Calculator();
        $result = $calc->subtract(2, 5);
        $this->assertEquals(-3, $result);
    }
}
?>
