<?php

namespace FactoryMethod\IDCard;

use FactoryMethod\Framework\Product;

class IDCard extends Product
{
    private string $owner;

    public function __construct(string $owner)
    {
        echo $owner . "のカードを作ります\n";
        $this->owner = $owner;
    }

    public function use(): void
    {
        echo $this->owner . "のカードを使います\n";
    }

    public function getOwner(): string
    {
        return $this->owner;
    }
}