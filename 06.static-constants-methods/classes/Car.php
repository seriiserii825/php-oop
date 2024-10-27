<?php

class Car
{
  public $color;
  public $wheels = 4;
  public $speed = 180;
  public $brand;
  public static $count = 0;

  const TEST_CAR = 'Prototype';
  const TEST_CAR_SPEED = 200;

  public function __construct($color, $wheels, $speed, $brand)
  {
    $this->color = $color;
    $this->wheels = $wheels;
    $this->speed = $speed;
    $this->brand = $brand;
    self::$count++;
  }

  public static function getCount()
  {
    return self::$count;
  }

  public static function getPrototype()
  {
    return self::TEST_CAR . ': ' . self::TEST_CAR_SPEED;
  }

  public function getCar()
  {
    return "
    Color: $this->color <br>
    Wheels: $this->wheels <br>
    Speed: $this->speed <br>
    Brand: $this->brand <br>
";
  }
}
