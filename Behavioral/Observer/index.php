<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Behavioral\Observer\EmailObserver;
use Behavioral\Observer\LogObserver;
use Behavioral\Observer\UserSubject;

$userSubject = new UserSubject();

// Create observers
$emailObserver = new EmailObserver();
$logObserver = new LogObserver();

// Attach observers to the subject
$userSubject->attach($emailObserver);
$userSubject->attach($logObserver);

// Register a user (Triggers observers)
$userSubject->registerUser("john.doe@example.com");
