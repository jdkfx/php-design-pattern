<?php

namespace FactoryMethod\Framework;

use FactoryMethod\Framework\Product;

class Factory
{
    public function create($owner): Product
    {
        $product = $this->createProduct($owner);
        $this->registerProduct($product);
        return $product;
    }

    protected function createProduct(String $owner): Product
    {
        return new Product($owner);
    }

    protected function registerProduct(Product $product): void
    {
        //
    }
}