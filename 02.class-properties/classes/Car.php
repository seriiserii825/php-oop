<?php

class Car
{
  public $color;
  public $wheels = 4;
  public $speed = 180;
  public $brand;

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
