<?php
// Testbench for unit testing of Calculator class for Addition, Subtraction
// multiplication and Division in permutation and combination of positive ,
// negative numbers and zero using PHPUnit

//procedure to install PHPUnit
// https://phpunit.de/getting-started.html

//to run Testbench : phpunit calc-test/calculatorTest.php

// contains 45 tests and 45 assertions

    use PHPUnit\Framework\TestCase;

    include_once('./calculator.php');

    class CalculatorTest extends TestCase {

        //Addition test cases for all permutation and combination
        //in plus minus and zero

        public function testAddPlusPlus() {
            $testVar = new Calculator(4,5);
            $testVar->add();
            $this->assertEquals(9, $testVar->getResult());
        }

        public function testAddPlusZero() {
            $testVar = new Calculator(4,0);
            $testVar->add();
            $this->assertEquals(4, $testVar->getResult());
        }

        public function testAddPlusMinus() {
            $testVar = new Calculator(4,-5);
            $testVar->add();
            $this->assertEquals(-1, $testVar->getResult());
        }

        public function testAddZeroPlus() {
            $testVar = new Calculator(0,5);
            $testVar->add();
            $this->assertEquals(5, $testVar->getResult());
        }

        public function testAddZeroZero() {
            $testVar = new Calculator(0,0);
            $testVar->add();
            $this->assertEquals(0, $testVar->getResult());
        }

        public function testAddZeroMinus() {
            $testVar = new Calculator(0,-5);
            $testVar->add();
            $this->assertEquals(-5, $testVar->getResult());
        }

        public function testAddMinusPlus() {
            $testVar = new Calculator(-4,5);
            $testVar->add();
            $this->assertEquals(1, $testVar->getResult());
        }

        public function testAddMinusZero() {
            $testVar = new Calculator(-1,0);
            $testVar->add();
            $this->assertEquals(-1, $testVar->getResult());
        }

        public function testAddMinusMinus() {
            $testVar = new Calculator(-4,-5);
            $testVar->add();
            $this->assertEquals(-9, $testVar->getResult());
        }

        //Subtraction test cases for all permutation and combination
        //in plus minus and zero

        public function testSubtractPlusPlus() {
            $testVar = new Calculator(5,4);
            $testVar->subtract();
            $this->assertEquals(1, $testVar->getResult());
        }

        public function testSubtractPlusZero() {
            $testVar = new Calculator(4,0);
            $testVar->subtract();
            $this->assertEquals(4, $testVar->getResult());
        }

        public function testSubtractPlusMinus() {
            $testVar = new Calculator(4,-5);
            $testVar->subtract();
            $this->assertEquals(9, $testVar->getResult());
        }

        public function testSubtractZeroPlus() {
            $testVar = new Calculator(0,5);
            $testVar->subtract();
            $this->assertEquals(-5, $testVar->getResult());
        }

        public function testSubtractZeroZero() {
            $testVar = new Calculator(0,0);
            $testVar->subtract();
            $this->assertEquals(0, $testVar->getResult());
        }

        public function testSubtractZeroMinus() {
            $testVar = new Calculator(0,-5);
            $testVar->subtract();
            $this->assertEquals(5, $testVar->getResult());
        }

        public function testSubtractMinusPlus() {
            $testVar = new Calculator(-4,5);
            $testVar->subtract();
            $this->assertEquals(-9, $testVar->getResult());
        }

        public function testSubtractMinusZero() {
            $testVar = new Calculator(-1,0);
            $testVar->subtract();
            $this->assertEquals(-1, $testVar->getResult());
        }

        public function testSubtractMinusMinus() {
            $testVar = new Calculator(-4,-5);
            $testVar->subtract();
            $this->assertEquals(1, $testVar->getResult());
        }

        //Multiplication test cases for all permutation and combination
        //in plus minus and zero

        public function testMultiplyPlusPlus() {
            $testVar = new Calculator(4,5);
            $testVar->multiply();
            $this->assertEquals(20, $testVar->getResult());
        }

        public function testMultiplyPlusZero() {
            $testVar = new Calculator(4,0);
            $testVar->multiply();
            $this->assertEquals(0, $testVar->getResult());
        }

        public function testMultiplyPlusMinus() {
            $testVar = new Calculator(4,-5);
            $testVar->multiply();
            $this->assertEquals(-20, $testVar->getResult());
        }

        public function testMultiplyZeroPlus() {
            $testVar = new Calculator(0,5);
            $testVar->multiply();
            $this->assertEquals(0, $testVar->getResult());
        }

        public function testMultiplyZeroZero() {
            $testVar = new Calculator(0,0);
            $testVar->multiply();
            $this->assertEquals(0, $testVar->getResult());
        }

        public function testMultiplyZeroMinus() {
            $testVar = new Calculator(0,-5);
            $testVar->multiply();
            $this->assertEquals(0, $testVar->getResult());
        }

        public function testMultiplyMinusPlus() {
            $testVar = new Calculator(-4,5);
            $testVar->multiply();
            $this->assertEquals(-20, $testVar->getResult());
        }

        public function testMultiplyMinusZero() {
            $testVar = new Calculator(-1,0);
            $testVar->multiply();
            $this->assertEquals(0, $testVar->getResult());
        }

        public function testMultiplyMinusMinus() {
            $testVar = new Calculator(-4,-5);
            $testVar->multiply();
            $this->assertEquals(20, $testVar->getResult());
        }

        //Division test cases for all permutation and combination
        //in plus minus and zero

        public function testDividePlusPlus() {
            $testVar = new Calculator(4,5);
            $testVar->divide();
            $this->assertEquals(0.8, $testVar->getResult());
        }

        public function testDividePlusZero() {
            $testVar = new Calculator(4,0);
            $testVar->divide();
            //hack for Exception set error code as 99
            //check assertequal code number
            $this->assertEquals(99, $testVar->getErrorCode());
        }

        public function testDividePlusMinus() {
            $testVar = new Calculator(4,-5);
            $testVar->divide();
            $this->assertEquals(-0.8, $testVar->getResult());
        }

        public function testDivideZeroPlus() {
            $testVar = new Calculator(0,5);
            $testVar->divide();
            $this->assertEquals(0, $testVar->getResult());
        }

        public function testDivideZeroZero() {
            $testVar = new Calculator(0,0);
            $testVar->divide();
            //hack for Exception set error code as 99
            //check assertequal code numbe
            $this->assertEquals(99, $testVar->getErrorCode());
        }

        public function testDivideZeroMinus() {
            $testVar = new Calculator(0,-5);
            $testVar->divide();
            $this->assertEquals(0, $testVar->getResult());
        }

        public function testDivideMinusPlus() {
            $testVar = new Calculator(-4,5);
            $testVar->divide();
            $this->assertEquals(-0.8, $testVar->getResult());
        }

        public function testDivideMinusZero() {
            $testVar = new Calculator(-1,0);
            $testVar->divide();
            //hack for Exception set error code as 99
            //check assertequal error_code
            $this->assertEquals(99, $testVar->getErrorCode());
        }

        public function testDivideMinusMinus() {
            $testVar = new Calculator(-4,-5);
            $testVar->divide();
            $this->assertEquals(0.8, $testVar->getResult());
        }

        //Modulus test cases for all permutation and combination
        //in plus minus and zero

        public function testModulusPlusPlus() {
            $testVar = new Calculator(4,5);
            $testVar->modulus();
            $this->assertEquals(4, $testVar->getResult());
        }

        public function testModulusPlusZero() {
            $testVar = new Calculator(4,0);
            $testVar->modulus();
            //hack for Exception set error code as 99
            //check assertequal error_code
            $this->assertEquals(89, $testVar->getErrorCode());
        }

        public function testModulusPlusMinus() {
            $testVar = new Calculator(4,-5);
            $testVar->modulus();
            $this->assertEquals(4, $testVar->getResult());
        }

        public function testModulusZeroPlus() {
            $testVar = new Calculator(0,5);
            $testVar->modulus();
            $this->assertEquals(0, $testVar->getResult());
        }

        public function testModulusZeroZero() {
            $testVar = new Calculator(0,0);
            $testVar->modulus();
            //hack for Exception set error code as 99
            //check assertequal error_code
            $this->assertEquals(89, $testVar->getErrorCode());
        }

        public function testModulusZeroMinus() {
            $testVar = new Calculator(0,-5);
            $testVar->modulus();
            $this->assertEquals(0, $testVar->getResult());
        }

        public function testModulusMinusPlus() {
            $testVar = new Calculator(-4,5);
            $testVar->modulus();
            $this->assertEquals(-4, $testVar->getResult());
        }

        public function testModulusMinusZero() {
            $testVar = new Calculator(-1,0);
            $testVar->modulus();
            //hack for Exception set error code as 99
            //check assertequal error_code
            $this->assertEquals(89, $testVar->getErrorCode());
        }

        public function testModulusMinusMinus() {
            $testVar = new Calculator(-4,-5);
            $testVar->modulus();
            $this->assertEquals(-4, $testVar->getResult());
        }

    }
?>
