<?php

namespace Iterator;

class BookShelf implements Aggregate
{
    private array $books;
    private int $last = 0;

    public function getBookAt(int $index): Book
    {
        return $this->books[$index];
    }

    public function appendBook(Book $book): void
    {
        $this->books[] = $book;
        $this->last++;
    }

    public function getLength(): int
    {
        return $this->last;
    }

    public function iterator(): BookShelfIterator
    {
        return new BookShelfIterator($this);
    }
}