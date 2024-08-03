<?php

namespace Creational\FactoryMethod;

class BENZBrandFactory
{
    public function BuildBrand()
    {
        return new BENZBrand();
    }
}