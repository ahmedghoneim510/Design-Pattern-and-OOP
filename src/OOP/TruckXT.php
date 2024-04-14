<?php

namespace App\OOP;

class TruckXT extends Car implements WeightHolder
{


    public function leftCargo()
    {
        return true;
    }

    public function move()
    {
        return $this->speed;
    }

    public function turnOn()
    {
        $this->turnOn = true;
        return true;
    }

    public function turnOff()
    {
        $this->turnOn = false;
        return false;
    }

    public function accelerate()
    {
        $this->speed =$this->speed*0.2;
        return true;
    }

    public function park()
    {
       return true;
    }
}