<?php

namespace Behavioral\Mediator;

class RoadLightMediator implements MediatorInterface
{
    public function __construct(private Road $leftRoad, private Road $rightRoad)
    {
    }

    public function action(Road $road, string $event): void
    {
        if ($road->getId() === LeftRoad::ID) {
            if ($event === Road::MOVE_CAR) {
                $this->rightRoad->stop();
                $this->leftRoad->move();
            } else {
                $this->rightRoad->move();
                $this->leftRoad->stop();
            }
        }

        if ($road->getId() === RightRoad::ID) {
            if ($event === Road::MOVE_CAR) {
                $this->leftRoad->stop();
                $this->rightRoad->move();
            } else {
                $this->leftRoad->move();
                $this->rightRoad->stop();
            }
        }
    }
}