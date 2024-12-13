<?php

namespace Behavioral\Mediator;

abstract class Road
{
    public const STOP_CAR = 'stop';
    public const MOVE_CAR = 'move';

    protected string $roadStatus = self::STOP_CAR;

    public function stop(): void
    {
        $this->roadStatus = self::STOP_CAR;
    }

    public function move(): void
    {
        $this->roadStatus = self::MOVE_CAR;
    }

    abstract public function getId(): string;

    public function getRoadStatus(): string
    {
        return $this->roadStatus;
    }
}
