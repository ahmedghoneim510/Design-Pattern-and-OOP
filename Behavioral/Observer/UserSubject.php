<?php

namespace Behavioral\Observer;

class UserSubject
{
    private $observers = [];

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        $this->observers=array_filter($this->observers, function ($a) use ($observer) {
            return (! ($a === $observer));
        });
    }
    public function notify($event)
    {
        foreach ($this->observers as $observer) {
            $observer->update($event);
        }
    }


    public function registerUser($email) {
        echo "User Registered: " . $email . '<br>';
        $this->notify($email);
    }
}