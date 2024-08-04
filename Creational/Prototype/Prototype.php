<?php

namespace Creational\Prototype;

interface Prototype
{
    public function shallowCopy();
    public function deepCopy();
}