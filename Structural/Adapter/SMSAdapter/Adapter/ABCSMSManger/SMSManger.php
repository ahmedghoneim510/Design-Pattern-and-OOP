<?php

namespace Structural\Adapter\SMSAdapter\Adapter\ABCSMSManger;

class SMSManger
{
    public function send(array $messages)
    {
        if($this->checkConnection() && $this->authenticate() && $this->connect()) {
            foreach ($messages as $message) {
                echo "Your message {$message['text']} is being sent to {$message['number']}'\n";
            }
        }
    }

    public function connect(): bool
    {
        return true;
    }

    public function checkConnection(): bool
    {
        return true;
    }

    public function authenticate(): bool
    {
        return true;
    }

    public function validatePhoneNumber( $phoneNumber): bool
    {
        return strlen($phoneNumber) < 8;
    }

    public function getDeliveryStatus(): string
    {
        return rand(5,8);
    }
}