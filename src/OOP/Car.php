<?php

namespace App\OOP;

abstract class Car
{
    protected $speed;
    protected $numberOfDoors;
    protected $color;
    protected $gearBoxSystems;

    protected $turnOn=false;
    private $dashboard;


    /**
     * @param $speed
     * @param $numberOfDoors
     * @param $color
     * @param $gearBoxSystems
     */

    public function __construct($speed, $numberOfDoors, $color, $gearBoxSystems)
    {
        $this->speed = $speed;
        $this->numberOfDoors = $numberOfDoors;
        $this->color = $color;
        $this->gearBoxSystems = $gearBoxSystems;
    }


    public abstract function move();
    public abstract function turnOn();
    public abstract function turnOff();
    public abstract function accelerate();

    public abstract function park();

    public function installDashboard(CarDashboard $dashboard)
    {
        $this->dashboard = $dashboard;
    }
    public function CarInfo()
    {
       if(isset($this->dashboard))
       {
           return $this->dashboard->GetDashboard();
       }
       else{
              return "No Dashboard Installed";
       }
    }


}