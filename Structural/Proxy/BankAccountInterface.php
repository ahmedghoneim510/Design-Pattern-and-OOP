<?php

namespace Structural\Proxy;

interface BankAccountInterface
{
    public function deposit($amount);
    public function withdraw($amount);
    public function getBalance();
}