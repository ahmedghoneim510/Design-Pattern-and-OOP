<?php

namespace Structural\Adapter\SMSAdapter;

use Structural\Adapter\SMSAdapter\Message\IMessage;

abstract class SMSClient
{
    protected  $message;

    protected $deliveryStatus;
    public function __construct($message=[])
    {
        $this->message = $message;
    }
    public function addMessage(IMessage $message)
    {
        $this->message[] = $message;
    }

    abstract public function filterNumber();
    abstract public function send();

    abstract public function getDeliveryStatus();
}