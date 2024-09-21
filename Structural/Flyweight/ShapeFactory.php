<?php

namespace Structural\Flyweight;

class ShapeFactory
{
    private $circleMap = [];
    public function getCircle($radius) {
        if (!isset($this->circleMap[$radius])) {
            $this->circleMap[$radius] = new Circle($radius);
            echo "Creating circle of radius {$radius}\n";
        }
        return $this->circleMap[$radius];
    }
}