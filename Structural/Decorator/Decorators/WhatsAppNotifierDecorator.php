<?php

namespace Structural\Decorator\Decorators;

use Structural\Decorator\Notifier;
use Structural\Decorator\NotifierDecorator;

class WhatsAppNotifierDecorator extends NotifierDecorator
{
    protected  $phoneNumber;

    /**
     * SMSNotifierDecorator constructor.
     * @param Notifier $notifier
     * @param string $phoneNumber
     */
    public function __construct(Notifier $notifier, string $phoneNumber)
    {
        parent::__construct($notifier);
        $this->phoneNumber = $phoneNumber;
    }

    public function notify()
    {
        parent::notify();
        $this->sendSMS();
    }

    private function sendSMS()
    {
        echo "Sending WhatsApp message to {$this->phoneNumber}</br>";
        echo "Your latest operation was executed successfully</br>";
    }
}