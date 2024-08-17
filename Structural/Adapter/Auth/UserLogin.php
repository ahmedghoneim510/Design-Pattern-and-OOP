<?php

namespace Structural\Adapter\Auth;

class UserLogin
{
    public $authAdapter;

    public function __construct($authAdapter)
    {
        $this->authAdapter = $authAdapter;
    }

    public function login($credentials=[])
    {
        // Assuming the authAdapter's login method returns a string
        return $this->authAdapter->login($credentials);
    }
}
