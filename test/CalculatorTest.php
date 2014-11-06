<?php

use App\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
  private $calculator;

  public function setUp()
  {
      $this->calculator = new Calculator;
  }

  public function inputNumbers()
  {
    return [
      [2, 2, 4],
      [1, 1, 2],
      [3, -1, 2]
    ];
  }

  public function testAddNumbers()
  {
    $this->assertEquals(4, $this->calculator->add(2, 2));
  }

  /**
  * @expectedException InvalidArgumentException
  */
  public function testThrowsExceptionForNonNumericParams()
  {
    $this->calculator->add('a', []);
  }

  /**
  * @dataProvider inputNumbers
  */
  public function testMultipleValues($x, $y, $sum)
  {
    $this->assertEquals($sum, $this->calculator->add($x, $y));
  }
}
