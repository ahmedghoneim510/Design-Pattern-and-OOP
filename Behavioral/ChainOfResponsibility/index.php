<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Behavioral\ChainOfResponsibility\AuthenticationHandler;
use Behavioral\ChainOfResponsibility\AuthorizationHandler;

$authenticationHandler = new AuthenticationHandler();
$authorizationHandler = new AuthorizationHandler();

$authenticationHandler->setNext($authorizationHandler);


echo $authorizationHandler->handle("auth").'<br>';
echo $authenticationHandler->handle("admin");
