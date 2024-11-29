<?php

namespace Behavioral\Command;

class DeployCommand implements Command
{

    public function __construct(private GitReceiver $gitReceiver)
    {
    }

    public function execute()
    {
        $this->gitReceiver->gitAdd();
        $this->gitReceiver->gitCommit();
        $this->gitReceiver->gitPush();
    }

}