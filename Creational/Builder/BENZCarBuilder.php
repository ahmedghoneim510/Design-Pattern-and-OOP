<?php

namespace Creational\Builder;

use Creational\Builder\Models\BENZCar;

class BENZCarBuilder implements CarBuilderInterface
{
    private $benzCar;
    public function createCar()
    {
        $this->benzCar = new BENZCar();
    }

    public function addEngine()
    {
        $this->benzCar->setPart('engine', 'BENZ engine');
    }

    public function addDoors()
    {
        $this->benzCar->setPart('doors', 'BENZ doors');
    }

    public function addBody()
    {
        $this->benzCar->setPart('body', 'BENZ body');
    }

    public function addWheels()
    {
        $this->benzCar->setPart('wheels', 'BENZ wheels');
    }

    public function getCar()
    {
        return $this->benzCar;
    }
}