<?php

namespace Structural\Bridge;

class Tv implements IDevice
{
    private $isEnabled = false;
    private $volume = 0;
    private $channel;

    public function isEnabled()
    {
        return $this->isEnabled;
    }

    public function enable()
    {
        $this->isEnabled = true;
    }

    public function disable()
    {
        $this->isEnabled = false;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($percent)
    {
        $this->volume = $percent;
    }

    public function getChannel()
    {
        return "this is Tv channel";
    }


}