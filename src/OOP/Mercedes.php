<?php

namespace App\OOP;

class Mercedes extends Car
{
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
        $this->speed =$this->speed*0.3;
        return true;
    }

    public function park()
    {
       return true;
    }
}