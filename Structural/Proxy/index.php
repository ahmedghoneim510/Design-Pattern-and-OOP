<?php

namespace Structural\Proxy;

require_once __DIR__ . '/../../vendor/autoload.php';

$accountProxy = new BankAccountProxy(12345, true);

// Check balance (first time fetches real balance and caches it)
echo "Balance: $" . $accountProxy->getBalance() . "<br>";

// Deposit money (invalidates the cache)
$accountProxy->deposit(2000);

// Check balance again (cache is invalidated, so it fetches fresh balance)
echo "Balance after deposit: $" . $accountProxy->getBalance() . "<br>";

// Withdraw money (invalidates the cache)
$accountProxy->withdraw(1000);

// Check balance again (fetches fresh balance)
echo "Balance after withdrawal: $" . $accountProxy->getBalance() . "<br>";

// Unauthorized user trying to access the account
$unauthorizedAccountProxy = new BankAccountProxy(67890, false);
$unauthorizedAccountProxy->withdraw(500); // Access denied
