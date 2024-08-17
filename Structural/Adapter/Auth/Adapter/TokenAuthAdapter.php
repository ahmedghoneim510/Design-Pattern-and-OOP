<?php

namespace Structural\Adapter\Auth\Adapter;

use Structural\Adapter\Auth\Services\AuthUsingTokenService;

class TokenAuthAdapter implements AuthInterface
{
    private $authService;

    public function __construct()
    {
        $this->authService = new AuthUsingTokenService();
    }

    public function login($params=[]): string
    {
        return $this->authService->TokenLogin($params);
    }
}
