<?php

use Structural\Decorator\Decorators\SMSNotifierDecorator;
use Structural\Decorator\Decorators\WhatsAppNotifierDecorator;
use Structural\Decorator\EmailNotifier;

require_once __DIR__ . '/../../vendor/autoload.php';

$smsNotificationEnabled = true;
$whatsAppNotificationEnabled = true;
$notifier = new EmailNotifier('mohammed@abc.com');

if($smsNotificationEnabled) {
    $notifier = new SMSNotifierDecorator($notifier, '01004054291');
}

if($whatsAppNotificationEnabled) {
    $notifier = new WhatsAppNotifierDecorator($notifier, '01069867871');
}

$notifier->notify();