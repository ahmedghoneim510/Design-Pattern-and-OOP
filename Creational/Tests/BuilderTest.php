<?php

namespace Creational\Tests;

use Creational\Builder\BENZCarBuilder;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\CarProducer;
use Creational\Builder\Models\BENZCar;
use Creational\Builder\Models\BMWCar;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testCanProduceBMWCar()
    {
        $carBuilder = new BMWCarBuilder();
        $carProducer= new CarProducer($carBuilder);
        $car = $carProducer->produceCar();
        $this->assertInstanceOf(BMWCar::class, $car);

    }
    public function testCanProduceBENZCar()
    {
        $carBuilder = new BENZCarBuilder();
        $carBuildDirector = new CarProducer($carBuilder);
        $car =  $carBuildDirector->produceCar();
        $this->assertInstanceOf(BENZCar::class, $car);
    }
}