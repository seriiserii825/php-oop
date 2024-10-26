<?php

class Car
{
  public $color;
  public $wheels = 4;
  public $speed = 180;
  public $brand;

  public function __construct($color, $wheels, $speed, $brand)
  {
    $this->color = $color;
    $this->wheels = $wheels;
    $this->speed = $speed;
    $this->brand = $brand;
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
