<?php

use Iterator\Book;
use Iterator\BookShelf;

require_once __DIR__ . '/../vendor/autoload.php';

$bookshelf = new BookShelf(4);
$bookshelf->appendBook(new Book("Write Code Every day"));
$bookshelf->appendBook(new Book("Programming"));
$bookshelf->appendBook(new Book("Bible"));
$bookshelf->appendBook(new Book("Art"));

$iterator = $bookshelf->iterator();
while ($iterator->hasNext()) {
    echo $iterator->next()->getName() . "\n";
}

