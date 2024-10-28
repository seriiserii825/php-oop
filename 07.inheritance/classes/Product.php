<?php

class Product
{
  public $name;
  public $price;
  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  //name getter
  public function getName()
  {
    return $this->name;
  }

  //price getter
  public function getPrice()
  {
    return $this->price;
  }

  public function getProduct()
  {
    $out = "About the product
            Name: $this->name
            Price: $this->price
==================================================
";
    return $out;
  }
}
