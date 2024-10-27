<?php

require_once __DIR__ . '/../func.php';
require_once __DIR__ . '/classes/Car.php';
$car1 = new Car('red', 4, 180, 'Toyota');
echo $car1->getCar();
$car2 = new Car('blue', 3, 150, 'BMW');
echo $car2->getCar();
vardump(Car::$count);
vardump(Car::getCount());

vardump(Car::getPrototype());
