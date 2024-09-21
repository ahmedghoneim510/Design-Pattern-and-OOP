<?php

use Structural\Flyweight\ShapeFactory;

require_once __DIR__ . '/../../vendor/autoload.php';
// Client Code
$shapeFactory = new ShapeFactory();

// Creating circles
$circle1 = $shapeFactory->getCircle(5);
$circle1->draw('red');

$circle2 = $shapeFactory->getCircle(10);
$circle2->draw('blue');

// Reusing the circle with radius 5
$circle3 = $shapeFactory->getCircle(5);
$circle3->draw('green');