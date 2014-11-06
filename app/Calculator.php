<?php namespace App;

class Calculator
{
  public function add($number1, $number2)
  {
    if( ! is_int($number1) or ! is_int($number2)) {
        throw new \InvalidArgumentException;
    }

    return $number1 + $number2;
  }
}
