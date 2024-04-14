<?php

namespace App\OOP;

class Order
{
    private $source;
    private $destination;
    private $weight;

    public function __construct($source, $destination, $weight)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->weight = $weight;
    }
    public function deliverOrder(Car $car)
    {
        if ($car instanceof WeightHolder) {
            echo $car->leftCargo()."<br>";
        }
        return "i am moving from $this->source 
        to $this->destination with weight
         $this->weight using Car Speed ".$car->move()."<br>";
    }

}