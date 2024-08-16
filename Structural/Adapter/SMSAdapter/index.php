<?php

use Structural\Adapter\SMSAdapter\Adapter\ABSSMSClientAdapter;
use Structural\Adapter\SMSAdapter\Message\SMSMessage;
use Structural\Adapter\SMSAdapter\MonkeySMSClient;

require_once __DIR__ . '/../../../vendor/autoload.php';



$message1 = new SMSMessage('Welcome to our club', '01231399999');
$message2 = new SMSMessage('Please, join our community', '0123987');
$message3 = new SMSMessage('Your account has been activated', '01231399999');
$message4 = new SMSMessage('Thank you for your feedback', '0123987');

$client = new ABSSMSClientAdapter([
    $message1, $message2, $message3
]);

$client->addMessage($message4);

$client->filterNumber();
echo "<br>";
$ex= $client->send();
echo "<br>";
echo "Message is sent: $ex <br>";
echo $client->getDeliveryStatus();
