<?php

namespace Structural\Adapter\Auth\Services;

class AuthUsingBasicLoginService
{
    public function BasicLogin($arr): string
    {
        return "Username: {$arr['username']}, Password: {$arr['password']}";
    }
}