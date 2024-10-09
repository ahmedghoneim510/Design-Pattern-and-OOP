<?php

namespace Structural\Proxy;

class BankAccount implements BankAccountInterface
{
    private $balance;

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        if ($amount > $this->balance) {
            throw new \InvalidArgumentException('Withdrawal amount larger than balance');
        }
        $this->balance -= $amount;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }
}