<?php

// Calculator class for basic unit testing assignment contains, Addition
// subraction, multiplication , division, and modulus. Each operation gives the
// result and error code as output
// error code 0 : All okay
// error code 99 : Divison by zero error
// error code 89 : Modulus by zero error

  class Calculator {

    private $operand_one;
    private $operand_two;
    private $operation_result;
    private $error_code;

    public function __construct($operand_one, $operand_two) {
      $this->operand_one = $operand_one;
      $this->operand_two = $operand_two;
      $this->error_code = 0;
    }

    public function add() {
      $this->operation_result = $this->operand_one + $this->operand_two;
    }

    public function subtract() {
      $this->operation_result = $this->operand_one - $this->operand_two;
    }

    public function multiply() {
      $this->operation_result = $this->operand_one * $this->operand_two;
    }

    public function modulus(){
      try {
        $this->internalModulus();
      } catch (Exception $e) {
        $this->error_code = $e->getCode();

      }
    }

    private function internalModulus() {
      if (!$this->operand_two) {
        //hack for Exception set error code as 99
        //check assertequal code number
        throw new Exception('Modulus by zero.', 89);
      }
        $this->operation_result =  $this->operand_one % $this->operand_two;
    }

    public function divide() {
        try {
          $this->internalDivide();
        } catch (Exception $e) {
          $this->error_code = $e->getCode();
        }
    }

    private function internalDivide() {
      if (!$this->operand_two) {
        //hack for Exception set error code as 99
        //check assertequal code number
        throw new Exception('Division by zero.', 99);
      }
        $this->operation_result =  $this->operand_one / $this->operand_two;
    }

    public function getResult(){
        return $this->operation_result;
    }

    public function getErrorCode(){
        return $this->error_code;
    }

    public function setOperandOne($data_input){
        $this->operand_one = $data_input;
    }

    public function setOperandTwo($data_input){
        $this->operand_two = $data_input;
    }
  }
?>
