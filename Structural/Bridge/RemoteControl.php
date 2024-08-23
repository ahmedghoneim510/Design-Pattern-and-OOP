<?php

namespace Structural\Bridge;

class RemoteControl
{
    protected $device;

    public function __construct(IDevice $device)
    {
        $this->device = $device;
    }

    public function togglePower()
    {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        } else {
            $this->device->enable();
        }
    }

    public function volumeDown()
    {
        $this->device->setVolume($this->device->getVolume() - 10);
    }

    public function volumeUp()
    {
        $this->device->setVolume($this->device->getVolume() + 10);
    }

    public function GetChannel()
    {
        return $this->device->getChannel();
    }
}