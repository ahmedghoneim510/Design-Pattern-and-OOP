<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Behavioral\Mediator\LeftRoad;
use Behavioral\Mediator\RightRoad;
use Behavioral\Mediator\Road;
use Behavioral\Mediator\RoadLightMediator;

$leftRoad = new LeftRoad();
$rightRoad = new RightRoad();

$mediator = new RoadLightMediator($leftRoad, $rightRoad);

echo "<br>Left Road: Moving<br>";
$mediator->action($leftRoad, Road::MOVE_CAR);
echo "<br>Left Road Status: " . $leftRoad->getRoadStatus() . "<br>";
echo "<br>Right Road Status: " . $rightRoad->getRoadStatus() . "<br>";


echo "<br>---------------------------------<br>";


echo "<br>Right Road: Moving<br>";
$mediator->action($rightRoad, Road::MOVE_CAR);
echo "<br>Left Road Status: " . $leftRoad->getRoadStatus() . "<br>";
echo "<br>Right Road Status: " . $rightRoad->getRoadStatus() . "<br>";