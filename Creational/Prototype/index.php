<?php

use Creational\Prototype\Address;
use Creational\Prototype\User;

require_once 'User.php';

// Create an address and a user
$address = new Address('123 Elm St', 'Springfield');
$originalUser = new User('John Doe', 'john.doe@example.com', $address);

// Shallow copy the user
$shallowCopiedUser = $originalUser->shallowCopy();
$shallowCopiedUser->getAddress()->setStreet('456 Elm St');

// Deep copy the user
$deepCopiedUser = $originalUser->deepCopy();
$deepCopiedUser->getAddress()->setStreet('789 Oak St');

// Output the original, shallow, and deep copied users
echo "Original User Address: " . $originalUser->getAddress()->getStreet() . " - " . $originalUser->getAddress()->getCity() . "<br>";
echo "Shallow Copied User Address: " . $shallowCopiedUser->getAddress()->getStreet() . " - " . $shallowCopiedUser->getAddress()->getCity() ."<br>";
echo "Deep Copied User Address: " . $deepCopiedUser->getAddress()->getStreet() . " - " . $deepCopiedUser->getAddress()->getCity() . "<br>";
