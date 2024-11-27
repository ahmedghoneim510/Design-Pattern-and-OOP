<?php
namespace Behavioral\ChainOfResponsibility;
class AuthenticationHandler extends AbstractHandler
{
    public function handle(string $request): string
    {
        if($request == "auth"){
            return "Authenticating request";
        }
        return parent::handle($request);
    }

}