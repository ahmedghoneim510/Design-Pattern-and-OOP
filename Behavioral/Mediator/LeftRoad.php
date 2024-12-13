<?php

namespace Behavioral\Mediator;

class LeftRoad extends Road
{
    const ID = 'left';
    public function getId(): string
    {
        return self::ID;
    }

}