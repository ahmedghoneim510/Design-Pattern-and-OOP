<?php
namespace Behavioral\ChainOfResponsibility;

use RuntimeException; // Import the built-in exception class

abstract class AbstractHandler implements Handler
{
    private ?Handler $nextHandler = null;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(string $request): string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return "No handler could process the request.";
    }
}
