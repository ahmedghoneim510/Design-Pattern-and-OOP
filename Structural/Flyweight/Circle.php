<?php

namespace Structural\Flyweight;

class Circle implements Shape
{
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function draw($color) {
        echo "Drawing a Circle of radius {$this->radius} with color {$color}<br>";
    }
}