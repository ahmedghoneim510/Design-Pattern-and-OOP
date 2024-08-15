<?php

namespace Creational\Builder;

class BMWCarBuilder implements CarBuilderInterface
{
    private $bmwCar;


    public function createCar()
        {
        $this->bmwCar = new Models\BMWCar();
    }

    public function addEngine()
    {
        $this->bmwCar->setPart('engine', 'BMW engine');
    }

    public function addDoors()
    {
        $this->bmwCar->setPart('doors', 'BMW doors');
    }

    public function addBody()
    {
        $this->bmwCar->setPart('body', 'BMW body');
    }

    public function addWheels()
    {
        $this->bmwCar->setPart('wheels', 'BMW wheels');
    }

    public function getCar()
    {
        return $this->bmwCar;
    }
}