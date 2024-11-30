<?php

namespace Behavioral\Iterator;

interface Collection
{
    public function createIterator();
    public function add($book);
    public function remove($book);
}