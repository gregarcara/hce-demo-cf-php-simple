<?php
class SimpleTest extends PHPUnit_Framework_TestCase
{
  // ...

  public function testCanBeNegated()
  {
    // Arrange
    $a = "hello";
    $b = "hello";


    // Assert
    $this->assertEquals($a, $b);
  }

  // ...
}