<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory
{
    private $tax=10000;
    private $price;
    public function __construct($price)
    {
        $this->price = $price;
    }
    public function createBMWCar()
    {
        return new BMWCar($this->price);
    }
    public function createBENZCar()
    {
        return new BENZCar($this->price,$this->tax);
    }
}