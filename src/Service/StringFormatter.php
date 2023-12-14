<?php

namespace Drupal\my_assessment\Service;

use Drupal\Adder\Adder;

/**
 * Class StringFormatter
 * @package Drupal\my_assessment\Services
 */
class StringFormatter {

  protected $addTwoNums;

  // public function __construct(Adder $addTwoNums) {
  //   $this->adder = $addTwoNums;
  // }
  /**
   * @return \Drupal\Component\Render\MarkupInterface|string
   */
  public function getString() {
    $adder = \Drupal::service('my_assessment.add_two_numbers');
    $firstNum = $adder->getFirstNum();
    $secondNum = $adder->getSecondNum();
    $sum = $firstNum + $secondNum;
    return 'The product ' . $firstNum . ' and ' . $secondNum . ' is ' . $sum;
  }

}