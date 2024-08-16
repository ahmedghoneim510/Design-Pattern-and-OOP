<?php

namespace Structural\Adapter\SMSAdapter;

use PhpParser\Node\Stmt\If_;
use Structural\Adapter\SMSAdapter\Message\IMessage;

class MonkeySMSClient extends SMSClient
{
    public function filterNumber()
    {
        $this->message=array_filter($this->message, function(IMessage $message){
            return $message->validateNumber();
        });
        return count($this->message) > 0;
    }

    public function send()
    {
        if($this->filterNumber()) {
            foreach ($this->message as $message) {
               $this->deliveryStatus=rand(1,4);
               echo "Message is being sent to {$message->getMessage()} with status {$this->getDeliveryStatus()} <br>";
            }
        }
        return $this->getDeliveryStatus() ==SMSDeliveryStatus::SENT; // return true if message is sent
    }

    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }
}