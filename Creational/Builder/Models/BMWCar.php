<?php

namespace Creational\Builder\Models;

class BMWCar extends Car
{
    private $data= [];

    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}