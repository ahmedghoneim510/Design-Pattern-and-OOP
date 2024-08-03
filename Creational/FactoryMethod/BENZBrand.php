<?php

namespace Creational\FactoryMethod;

class BENZBrand implements CarBrandInterface
{
    public function createBrand()
    {
        return "BENZ Car Brand";
    }
}