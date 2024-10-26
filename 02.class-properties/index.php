<?php

require_once __DIR__ . '/classes/Car.php';
function vardump($var)
{
  print '<pre>' . print_r($var, 1) . '</pre>';
}
$car1 = new Car();
vardump($car1);

$car1->color = 'red';
$car1->brand = 'volvo';
$car1->speed = 200;
vardump($car1);


$car2 = new Car();
$car2->color = 'blue';
$car2->brand = 'bmw';
$car2->speed = 220;
vardump($car2);
