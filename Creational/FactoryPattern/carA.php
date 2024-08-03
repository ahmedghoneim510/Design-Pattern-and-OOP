<?php
namespace Creational\FactoryMethodPattern;

class CarA implements ICar
{
    public function type(): string
    {
        return "This is CarA";
    }
}

