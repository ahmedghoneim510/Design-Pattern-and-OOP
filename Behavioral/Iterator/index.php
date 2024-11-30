<?php

use Behavioral\Iterator\BookCollection;

require_once __DIR__ . '/../../vendor/autoload.php';



$collection=new BookCollection();

$collection->add('Design Patterns');
$collection->add('Clean Code');
$collection->add('Refactoring');

$iterator=$collection->createIterator();

while($iterator->valid()){
    echo $iterator->current()."<br>";
    echo $iterator->key()."<br>";
    $iterator->next();
}