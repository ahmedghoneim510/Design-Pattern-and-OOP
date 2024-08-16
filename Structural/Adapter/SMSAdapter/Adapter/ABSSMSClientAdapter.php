<?php

namespace Structural\Adapter\SMSAdapter\Adapter;

use Structural\Adapter\SMSAdapter\Adapter\ABCSMSManger\SMSManger;
use Structural\Adapter\SMSAdapter\Message\IMessage;
use Structural\Adapter\SMSAdapter\SMSClient;
use Structural\Adapter\SMSAdapter\SMSDeliveryStatus;

class ABSSMSClientAdapter extends SMSClient
{
    private  $manager = null;

    public function __construct(array $message = [])
    {
        parent::__construct($message);
        $this->manager = new SMSManger();
    }

    public function filterNumber(): bool
    {
        $this->message = array_filter(
            $this->message,
            function (IMessage $message) {
                return $this->manager->validatePhoneNumber($message->getNumber());
            }
        );
        return !empty($this->message);
    }

    public function send(): bool
    {
        if($this->filterNumber()) {
            $this->manager->send(
                array_map(function (IMessage $message): array {
                    return [
                        'number' => $message->getNumber(),
                        'text' => $message->getMessage()
                    ];
                }, $this->message)
            );
        }
        return $this->getDeliveryStatus() === SMSDeliveryStatus::SENT;
    }

    public function getDeliveryStatus(): string
    {
        return $this->manager->getDeliveryStatus() - 4;
    }
}