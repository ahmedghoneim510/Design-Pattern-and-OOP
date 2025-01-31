<?php

namespace Behavioral\Observer;

class EmailObserver implements Observer
{
    public function update($event)
    {
        echo "Email notification: " . $event .  '<br>';
    }
}