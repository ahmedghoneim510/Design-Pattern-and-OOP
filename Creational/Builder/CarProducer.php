<?php

namespace Creational\Builder;

class CarProducer
{
    private $carBuilder;
    public function __construct(CarBuilderInterface $carBuilder)
    {
        $this->carBuilder = $carBuilder;
    }

    public function produceCar()
    {
        $this->carBuilder->createCar();
        $this->carBuilder->addEngine();
        $this->carBuilder->addDoors();
        $this->carBuilder->addBody();
        $this->carBuilder->addWheels();
        return $this->carBuilder->getCar();
    }
}