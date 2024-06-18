<?php

namespace Creational\Tests;

use Creational\AbstractFactory\BENZCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryUnit extends TestCase
{


    public function testCanCreateBMWCar()
    {
        $carFactory=new CarAbstractFactory(100000);
        $bmwCar=$carFactory->createBMWCar();
        $this->assertInstanceOf(BMWCar::class,$bmwCar);
    }

    public function testCanCreateBENZCar()
    {
        $carFactory= new CarAbstractFactory(100000);
        $benzCar=$carFactory->createBENZCar();
        $this->assertInstanceOf(BENZCar::class,$benzCar);
    }

}
