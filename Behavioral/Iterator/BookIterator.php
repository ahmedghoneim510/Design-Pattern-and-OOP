<?php

namespace Behavioral\Iterator;

class BookIterator
{

    public function __construct($books)
    {
        $this->books = $books;
    }

    public function current()
    {
        return current($this->books);
    }
    public function next()
    {
        return next($this->books);
    }
    public function key()
    {
        return key($this->books);
    }
    public function valid()
    {
        return key($this->books) !== null;
    }
    public function rewind()
    {
        reset($this->books);
    }


}