<?php

namespace Behavioral\Command;

class GitReceiver
{
    private $getLog=[];

    public function getGitLog()
    {
        return $this->getLog;
    }
    public function gitAdd()
    {
        $this->getLog[] ='git add';
        echo 'git add<br>';
    }
    public function gitCommit()
    {
        $this->getLog[] ='git commit';
        echo 'git commit<br>';
    }
    public function gitPush()
    {
        $this->getLog[] ='git push';
        echo 'git push<br>';
    }
    public function gitRevert()
    {
        $this->getLog[] ='git revert';
        echo 'git revert<br>';
    }

}