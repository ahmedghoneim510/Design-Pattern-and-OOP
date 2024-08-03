<?php

namespace Creational\Tests;

use Creational\FactoryMethod\BENZBrand;
use Creational\FactoryMethod\BENZBrandFactory;
use Creational\FactoryMethod\BMWBrand;
use Creational\FactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{

    public function testCanbuildBMWBrand()
    {
        $factory = new BMWBrandFactory();
        $brand = $factory->BuildBrand();
        $this->assertInstanceOf(BMWBrand::class, $brand);
    }
    public function testCanBuildBENZBrand()
    {
        $factory = new BENZBrandFactory();
        $brand = $factory->BuildBrand();
        $this->assertInstanceOf(BENZBrand::class, $brand);
    }
}