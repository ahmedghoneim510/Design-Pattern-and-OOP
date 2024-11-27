<?php
namespace Behavioral\ChainOfResponsibility;

class AuthorizationHandler extends AbstractHandler
{
    public function handle(string $request): string
    {
        if($request=="admin"){
            return "Authorizing request";
        }
        return parent::handle($request);
    }
}