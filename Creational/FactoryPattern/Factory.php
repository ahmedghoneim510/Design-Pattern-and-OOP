<?php
namespace Creational\FactoryMethodPattern;

class Factory
{
    private $carType;

    public function __construct(string $carType)
    {
        $this->carType = $carType;
    }

    public function create(): ICar
    {
        switch ($this->carType) {
            case 'carA':
                return new CarA();
            case 'carB':
                return new CarB();
            default:
                throw new \Exception("Invalid car type");
        }
    }

    public function getCard()
    {
        switch ($this->carType) {
            case 'carA':
                return new MasterCard();
            case 'carB':
                return new VisaCard();
            default:
                throw new \Exception("Invalid car type");
        }
    }
}
