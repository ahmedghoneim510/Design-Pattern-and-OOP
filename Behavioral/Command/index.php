<?php

require_once __DIR__ . '/../../vendor/autoload.php';



use Behavioral\Command\CLIInvoker;
use Behavioral\Command\DeployCommand;
use Behavioral\Command\GitReceiver;
use Behavioral\Command\RevertCommand;


$receiver = new GitReceiver();
$deployCommand = new DeployCommand($receiver);
$revertCommand = new RevertCommand($receiver);

echo "Testing DeployCommand".'<br>';
$invoker = new CLIInvoker($deployCommand);
$invoker->run();

echo "Testing RevertCommand".'<br>';
$invoker = new CLIInvoker($revertCommand);
$invoker->run();
