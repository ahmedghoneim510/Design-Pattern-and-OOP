<?php

namespace App\OOP;

class CarDashboard
{
    protected $oilLevel;
    protected $fuelLevel;
    protected $airPressure;

    public function __construct($oilLevel, $fuelLevel, $airPressure)
    {
        $this->oilLevel = $oilLevel;
        $this->fuelLevel = $fuelLevel;
        $this->airPressure = $airPressure;
    }
    /**
     * @return mixed
     */
    public function getOilLevel()
    {
        return $this->oilLevel;
    }

    /**
     * @return mixed
     */
    public function getFuelLevel()
    {
        return $this->fuelLevel;
    }

    /**
     * @return mixed
     */
    public function getAirPressure()
    {
        return $this->airPressure;
    }


    public function GetDashboard()
    {
        return "Oil Level: ".$this->oilLevel." Fuel Level: ".$this->fuelLevel." Air Pressure: ".$this->airPressure;
    }
}