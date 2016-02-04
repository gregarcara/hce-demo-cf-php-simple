<?php


class TrivialTest extends PHPUnit_Framework_TestCase {

  public function testWillPass()
  {
    // Arrange
    $a = "hello";
    $b = "hello";


    // Assert
    $this->assertEquals($a, $b);
  }

  public function testWillAlsoPass()
  {
    // Arrange
    $a = "hello";
    $b = "hello";


    // Assert
    $this->assertEquals($a, $b);
  }
}
