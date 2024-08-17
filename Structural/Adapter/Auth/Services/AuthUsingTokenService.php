<?php

namespace Structural\Adapter\Auth\Services;

class AuthUsingTokenService
{
    public function TokenLogin( $arr): string
    {
        return "Token: {$arr['token']}";
    }
}