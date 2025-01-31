<?php

namespace Behavioral\Observer;

class LogObserver implements Observer
{
    public function update($event)
    {
        echo "Log notification: " . $event .  '<br>';
    }
}