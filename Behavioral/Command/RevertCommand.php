<?php

namespace Behavioral\Command;

class RevertCommand implements Command
{

    public function __construct(private GitReceiver $gitReceiver)
    {
    }

    public function execute()
    {
        $this->gitReceiver->gitRevert();
    }
}