<?php

// Create simple shapes (leaves)
use Structural\Composite\Circle;
use Structural\Composite\CompositeGraphic;
use Structural\Composite\Rectangle;

$circle1 = new Circle();
$circle2 = new Circle();
$rectangle = new Rectangle();

// Create a composite shape (group)
$group = new CompositeGraphic();
$group->add($circle1);
$group->add($circle2);
$group->add($rectangle);

// Draw all shapes in the group
$group->draw();