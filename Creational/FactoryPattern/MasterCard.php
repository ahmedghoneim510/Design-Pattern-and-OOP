<?php 
namespace Creational\FactoryMethodPattern;


class MasterCard implements IPayment
{
    public function getCardType()
    {
        return "MasterCard";
    }
}