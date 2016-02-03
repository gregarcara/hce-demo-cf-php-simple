<?php

/**
 * Created by IntelliJ IDEA.
 * User: neilotoole
 * Date: 03/Feb/16
 * Time: 11:06
 */
class PhaniPantsTest extends PHPUnit_Framework_TestCase {

  public function testMyPants()
  {
    // Arrange
    $a = "hello";
    $b = "hello";


    // Assert
    $this->assertEquals($a, $b);
  }

  public function testMyPants2()
  {
    // Arrange
    $a = "hello";
    $b = "world";


    // Assert
    $this->assertEquals($a, $b);
  }
}
