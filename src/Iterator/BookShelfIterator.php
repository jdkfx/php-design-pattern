<?php

namespace Iterator;

class BookShelfIterator implements Iterator
{
    private BookShelf $bookShelf;
    private int $index;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    public function hasNext(): bool
    {
        if ($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }

    public function next(): object
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}