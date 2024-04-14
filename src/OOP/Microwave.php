<?php

namespace App\OOP;

class Microwave
{
   private $temp;
    private $time;
    private $program;
    private $status;

    /**
     * @param $temp
     * @param $time
     * @param $program
     */
    public function __construct($temp, $time, $program)
    {
        $this->temp = $temp;
        $this->time = $time;
        $this->program = $program;
    }
    private function TurnOnMicrowave()
    {
        return "i am turning on the microwave<br>";
    }
    private function loadingDefreezingProgram()
    {
        return "Loading program $this->program<br>";
    }
    private function setTime()
    {
        return "Setting Time to $this->time<br>";
    }
    public function deFreeze()
    {
        echo $this->turnOn().'<br>';
        echo $this->TurnOnMicrowave();
        echo $this->loadingDefreezingProgram();
        echo $this->setTime();
        echo "i am defreezing the food at $this->temp for $this->time minutes using $this->program program";
    }
    public function turnOn(){
        $this->status = true;
        return true;
    }
    public function turnOff(){
        $this->status = false;
        return false;
    }
}