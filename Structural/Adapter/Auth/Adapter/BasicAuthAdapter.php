<?php

namespace Structural\Adapter\Auth\Adapter;

use Structural\Adapter\Auth\Services\AuthUsingBasicLoginService;

class BasicAuthAdapter implements AuthInterface
{
    public $authService = null;
    public function __construct()
    {
        $this->authService = new AuthUsingBasicLoginService();
    }
    public function login( $params=[]): string
    {
        return $this->authService->BasicLogin($params);
    }

}