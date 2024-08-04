<?php

namespace Creational\Prototype;

class Address
{
    private $street;
    private $city;

    public function __construct(string $street, string $city)
    {
        $this->street = $street;
        $this->city = $city;
    }
    public function getStreet(): string
    {
        return $this->street;
    }
    public function getCity(): string
    {
        return $this->city;
    }
    public function setStreet(string $street)
    {
        $this->street = $street;
    }
    public function setNumber(string $number)
    {
        $this->number = $number;
    }
    public function __toString(): string
    {
        return $this->street . ', '. $this->city;
    }
}