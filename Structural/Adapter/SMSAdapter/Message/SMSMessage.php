<?php

namespace Structural\Adapter\SMSAdapter\Message;

class SMSMessage implements IMessage
{
    private $message;
    private $number;

    public function __construct($message, $number)
    {
        $this->message = $message;
        $this->number = $number;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function validateMessage(): bool
    {
        return strlen($this->message) < 10;
    }


    public function validateNumber(): bool
    {
        return strlen($this->number) > 8;
    }
}