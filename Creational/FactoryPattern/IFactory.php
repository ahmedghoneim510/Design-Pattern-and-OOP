<?php
namespace Creational\FactoryMethodPattern;

interface IFactory
{
    public function create();

    public function getCard();
}