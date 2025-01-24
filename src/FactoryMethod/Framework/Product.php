<?php

namespace FactoryMethod\Framework;

abstract class Product
{
    public abstract function use(): void;
    public abstract function getOwner(): string;
}