<?php

namespace Structural\Adapter\SMSAdapter\Message;

interface IMessage
{
    public function validateMessage(): bool;
    public function validateNumber(): bool;

    public function getMessage(): string;
    public function getNumber(): string;
}