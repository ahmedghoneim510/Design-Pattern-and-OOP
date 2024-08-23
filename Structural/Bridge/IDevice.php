<?php

namespace Structural\Bridge;

interface IDevice
{
    public function isEnabled();
    public function enable();
    public function disable();
    public function getVolume();
    public function setVolume($percent);
    public function getChannel();
}