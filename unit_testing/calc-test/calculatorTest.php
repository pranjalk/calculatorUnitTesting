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

        private $calculator;

        protected function setUp()
        {
            $this->calculator = new Calculator(0,0);
        }

        protected function tearDown()
        {
            $this->calculator = NULL;
        }

        public function additionDataProvider() {
            return array(
                array("first_operand" => 4,
                        "second_operand" => 5,
                        "expected_result" => 9),
                array("first_operand" => 4,
                        "second_operand" => 0,
                        "expected_result" => 4),
                array("first_operand" => 4,
                        "second_operand" => -4,
                        "expected_result" => 0),
                array("first_operand" => 0,
                        "second_operand" => 4,
                        "expected_result" => 4),
                array("first_operand" => 0,
                        "second_operand" => 0,
                        "expected_result" => 0),
                array("first_operand" => 0,
                        "second_operand" => -4,
                        "expected_result" => -4),
                array("first_operand" => -4,
                        "second_operand" => 5,
                        "expected_result" => 1),
                array("first_operand" => -4,
                        "second_operand" => 0,
                        "expected_result" => -4),
                array("first_operand" => -4,
                        "second_operand" => -5,
                        "expected_result" => -9),
                );
            }

            /**
            * @dataProvider additionDataProvider
            */
           public function testAdd($operand_one, $operand_two, $expected){
               $this->calculator->setOperandOne($operand_one);
               $this->calculator->setOperandTwo($operand_two);
               $this->calculator->add();
               $this->assertEquals($expected, $this->calculator->getResult());
           }

            public function subtractionDataProvider() {
                return array(
                    array("first_operand" => 4,
                            "second_operand" => 5,
                            "expected_result" => -1),
                    array("first_operand" => 4,
                            "second_operand" => 0,
                            "expected_result" => 4),
                    array("first_operand" => 4,
                            "second_operand" => -4,
                            "expected_result" => 8),
                    array("first_operand" => 0,
                            "second_operand" => 4,
                            "expected_result" => -4),
                    array("first_operand" => 0,
                            "second_operand" => 0,
                            "expected_result" => 0),
                    array("first_operand" => 0,
                            "second_operand" => -4,
                            "expected_result" => 4),
                    array("first_operand" => -4,
                            "second_operand" => 5,
                            "expected_result" => -9),
                    array("first_operand" => -4,
                            "second_operand" => 0,
                            "expected_result" => -4),
                    array("first_operand" => -4,
                            "second_operand" => -5,
                            "expected_result" => 1),
                    );
                }

            /**
            * @dataProvider subtractionDataProvider
            */
           public function testSubtract($operand_one, $operand_two, $expected){
               $this->calculator->setOperandOne($operand_one);
               $this->calculator->setOperandTwo($operand_two);
               $this->calculator->subtract();
               $this->assertEquals($expected, $this->calculator->getResult());
           }

                public function multiplicationDataProvider() {
                    return array(
                        array("first_operand" => 4,
                                "second_operand" => 5,
                                "expected_result" => 20),
                        array("first_operand" => 4,
                                "second_operand" => 0,
                                "expected_result" => 0),
                        array("first_operand" => 4,
                                "second_operand" => -4,
                                "expected_result" => -16),
                        array("first_operand" => 0,
                                "second_operand" => 4,
                                "expected_result" => 0),
                        array("first_operand" => 0,
                                "second_operand" => 0,
                                "expected_result" => 0),
                        array("first_operand" => 0,
                                "second_operand" => -4,
                                "expected_result" => 0),
                        array("first_operand" => -4,
                                "second_operand" => 5,
                                "expected_result" => -20),
                        array("first_operand" => -4,
                                "second_operand" => 0,
                                "expected_result" => 0),
                        array("first_operand" => -4,
                                "second_operand" => -5,
                                "expected_result" => 20),
                        );
                    }

       /**
       * @dataProvider multiplicationDataProvider
       */
       public function testmultiply($operand_one, $operand_two, $expected){
          $this->calculator->setOperandOne($operand_one);
          $this->calculator->setOperandTwo($operand_two);
          $this->calculator->multiply();
          $this->assertEquals($expected, $this->calculator->getResult());
       }

       public function divisionDataProvider() {
           return array(
               array("first_operand" => 4,
                       "second_operand" => 5,
                       "expected_result" => 0.8),
               array("first_operand" => 4,
                       "second_operand" => 0,
                       "expected_result" => NULL),
               array("first_operand" => 4,
                       "second_operand" => -4,
                       "expected_result" => -1),
               array("first_operand" => 0,
                       "second_operand" => 4,
                       "expected_result" => 0),
               array("first_operand" => 0,
                       "second_operand" => 0,
                       "expected_result" => NULL),
               array("first_operand" => 0,
                       "second_operand" => -4,
                       "expected_result" => 0),
               array("first_operand" => -4,
                       "second_operand" => 5,
                       "expected_result" => -0.8),
               array("first_operand" => -4,
                       "second_operand" => 0,
                       "expected_result" => NULL),
               array("first_operand" => -4,
                       "second_operand" => -5,
                       "expected_result" => 0.8),
               );
           }

       /**
       * @dataProvider divisionDataProvider
       */
       public function testdivide($operand_one, $operand_two, $expected){
          $this->calculator->setOperandOne($operand_one);
          $this->calculator->setOperandTwo($operand_two);
          $this->calculator->divide();
          $this->assertEquals($expected, $this->calculator->getResult());
       }

       public function modulusDataProvider() {
           return array(
               array("first_operand" => 4,
                       "second_operand" => 5,
                       "expected_result" => 4),
               array("first_operand" => 4,
                       "second_operand" => 0,
                       "expected_result" => NULL),
               array("first_operand" => 4,
                       "second_operand" => -4,
                       "expected_result" => 0),
               array("first_operand" => 0,
                       "second_operand" => 4,
                       "expected_result" => 0),
               array("first_operand" => 0,
                       "second_operand" => 0,
                       "expected_result" => NULL),
               array("first_operand" => 0,
                       "second_operand" => -4,
                       "expected_result" => 0),
               array("first_operand" => -4,
                       "second_operand" => 5,
                       "expected_result" => -4),
               array("first_operand" => -4,
                       "second_operand" => 0,
                       "expected_result" => NULL),
               array("first_operand" => -4,
                       "second_operand" => -5,
                       "expected_result" => -4),
               );
           }

       /**
       * @dataProvider modulusDataProvider
       */
       public function testmodulus($operand_one, $operand_two, $expected){
          $this->calculator->setOperandOne($operand_one);
          $this->calculator->setOperandTwo($operand_two);
          $this->calculator->modulus();
          $this->assertEquals($expected, $this->calculator->getResult());
       }
    }
