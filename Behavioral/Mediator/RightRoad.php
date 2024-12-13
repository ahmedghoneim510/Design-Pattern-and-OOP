<?php

namespace Behavioral\Mediator;

class RightRoad extends Road
{
    public const ID = 'right';

    public function getId(): string
    {
        return self::ID;
    }
}