<?php

namespace Behavioral\Iterator;

class BookCollection implements Collection
{

    private $books = [];

    public function createIterator()
    {
        return new BookIterator($this->books);
    }

    public function add($book) // This has a parameter
    {
        $this->books[] = $book;
    }

    public function remove($book)
    {
        array_filter($this->books, function ($b) use ($book) {
            return $b !== $book;
        });
    }
}
