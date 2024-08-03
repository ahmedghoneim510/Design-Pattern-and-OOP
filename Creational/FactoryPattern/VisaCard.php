<?php 


namespace Creational\FactoryMethodPattern;


class VisaCard implements IPayment
{
    public function getCardType()
    {
        return "Visa";
    }
}
