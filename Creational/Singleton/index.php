<?php

namespace DesignPatterns\Creational\Singleton;

require_once('Counter.php');

$counter1 = Counter::getInstance();
$counter1->increment();
echo $counter1->getCount() . PHP_EOL;
echo '<br>';
$counter1->increment();
echo $counter1->getCount() . PHP_EOL;
echo '<br>';
$counter2 = Counter::getInstance();
echo $counter2->increment() . PHP_EOL;
echo $counter2->getCount() . PHP_EOL;
echo '<br>';
$counter2->increment();
echo $counter2->getCount() . PHP_EOL;
