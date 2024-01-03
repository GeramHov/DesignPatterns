<?php

namespace App\ShoppingCart\Interfaces;

interface ProductFactoryInterface
{
    public function createProduct($productCode);
}
