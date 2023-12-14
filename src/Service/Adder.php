<?php

namespace Drupal\my_assessment\Service;

/**
 * Class Adder
 * @package Drupal\myassessment\Services
 */
class Adder {

  protected $firstNum;
  protected $secondNum;

  /**
   * AdderService constructor.
   */
  public function __construct() {
    $this->firstNum = 100;
    $this->secondNum = 125;
  }


  /**
   * @return \Drupal\Component\Render\MarkupInterface|string
   */
  public function getFirstNum() {
    return $this->firstNum;
  }
  /**
   * @return \Drupal\Component\Render\MarkupInterface|string
   */
  public function getSecondNum() {
    return $this->secondNum;
  }


}