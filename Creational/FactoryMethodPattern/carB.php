<?php
namespace Creational\FactoryMethodPattern;

class CarB implements ICar
{
    public function type(): string
    {
        return "This is CarB";
    }
}

