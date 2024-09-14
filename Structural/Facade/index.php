<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Structural\Facade\UserFacade;

echo UserFacade::createUser('John Doe'); // Output: User John Doe created.

echo UserFacade::deleteUser('John Doe'); // Output: User John Doe deleted.