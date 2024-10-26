<?php

require_once __DIR__ . '/classes/Car.php';
function vardump($var)
{
  print '<pre>' . print_r($var, 1) . '</pre>';
}
$car1 = new Car('red', 4, 180, 'Toyota');

echo $car1->getCar();
