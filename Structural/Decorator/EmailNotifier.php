<?php

namespace Structural\Decorator;

class EmailNotifier implements \Structural\Decorator\Notifier
{
    private  $email;

    /**
     * EmailNotifier constructor.
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function notify()
    {
        echo "Sending email to: {$this->email}</br>";
        echo "Your latest operation was executed successfully</br>";
    }
}