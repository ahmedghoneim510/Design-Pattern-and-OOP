<?php

namespace Behavioral\Command;

class CLIInvoker
{

    public function __construct(private Command $command)
    {
    }

    public function run()
    {
        $this->command->execute();
    }
}