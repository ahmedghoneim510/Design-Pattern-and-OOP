<?php

namespace Creational\Prototype;
require_once 'Prototype.php';
require_once 'Address.php';
class User
{
    private $name;
    private $email;
    private $address;
    public function __construct(string $name, string $email, Address $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }
    public function shallowCopy(): User
    {
        return clone $this;
    }
    public function deepCopy(): User
    {
        $copy = clone $this;
        $copy->address = new Address($this->address->getStreet(), $this->address->getCity());
        return $copy;
    }

}