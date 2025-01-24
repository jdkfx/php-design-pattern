<?php

namespace FactoryMethod\IDCard;

use FactoryMethod\Framework\Factory;
use FactoryMethod\Framework\Product;

class IDCardFactory extends Factory
{
    private array $owners = [];

    protected function createProduct(string $owner): Product
    {
        return new IDCard($owner);
    }

    protected function registerProduct(Product $product): void
    {
        $this->owners[] = $product->getOwner();
    }

    public function getOwners(): array
    {
        return $this->owners;
    }
}