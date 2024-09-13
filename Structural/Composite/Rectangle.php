<?php

namespace Structural\Composite;

class Rectangle implements Graphic
{
    public function draw()
    {
        echo 'Drawing a rectangle';
    }
}