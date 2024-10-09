<?php

namespace Structural\Proxy;

class BankAccountProxy
{
    private $realBankAccount;
    private $cachedBalance;
    private $accountId;
    private $userHasAccess;


    public function __construct($accountId, $userHasAccess)
    {
        $this->accountId = $accountId;
        $this->userHasAccess = $userHasAccess;
        $this->cachedBalance = null;
    }

    public function getBalance()
    {
        if (!$this->userHasAccess) {
            echo "Access Denied: You do not have permission to view the balance<br>";
            return null;
        }

        echo "Logging: User is accessing balance for account ID {$this->accountId}<br>";

        if ($this->realBankAccount === null) {
            echo "Initializing the real bank account...<br>";
            $this->realBankAccount = new BankAccount($this->fetchBalanceFromDB());
        }

        if ($this->cachedBalance === null) {
            echo "Cache invalidated or empty. Fetching fresh balance...<br>";
            $this->cachedBalance = $this->realBankAccount->getBalance();
        } else {
            echo "Using cached balance...<br>";
        }

        return $this->cachedBalance;
    }

    // Deposit with logging and updating the cached balance
    public function deposit($amount)
    {
        if (!$this->userHasAccess) {
            echo "Access Denied: You do not have permission to deposit.<br>";
            return;
        }

        echo "Logging: User is depositing $amount to account ID {$this->accountId}<br>";

        if ($this->realBankAccount === null) {
            echo "Initializing the real bank account...<br>";
            $this->realBankAccount = new BankAccount($this->fetchBalanceFromDB());
        }

        $this->realBankAccount->deposit($amount);
        $this->cachedBalance = $this->getBalance(); // Update the cache after deposit
    }

    // Withdraw with logging, access control, and updating the cached balance
    public function withdraw($amount)
    {
        if (!$this->userHasAccess) {
            echo "Access Denied: You do not have permission to withdraw.<br>";
            return;
        }

        echo "Logging: User is withdrawing $amount from account ID {$this->accountId}<br>";

        if ($this->realBankAccount === null) {
            echo "Initializing the real bank account...<br>";
            $this->realBankAccount = new BankAccount($this->fetchBalanceFromDB());
        }

        $this->realBankAccount->withdraw($amount);
        $this->cachedBalance = $this->getBalance(); // Update the cache after withdrawal
    }

    private function fetchBalanceFromDB(): int
    {
        echo "Fetching balance from database...<br>";
        return 5000; // Example balance
    }
}