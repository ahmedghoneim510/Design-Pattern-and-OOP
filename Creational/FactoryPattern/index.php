<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Creational\FactoryMethodPattern\Factory;

// Create a factory for CarA
$factory = new Factory("carA");
$car = $factory->create();
echo $car->type(); // Output: This is CarA
echo "<br>";

echo $factory->getCard()->getCardType();
echo "<br>";
echo "<br>";
echo "<br>";

// Create a factory for CarB
$factory = new Factory("carB");
$car = $factory->create();
echo $car->type(); // Output: This is CarB
echo "<br>";

echo $factory->getCard()->getCardType();
