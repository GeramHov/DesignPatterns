<?php

namespace App\MealBuilder;

use App\MealBuilder\Interfaces\MenuInterface;
use App\MealBuilder\Interfaces\ProductInterface;

class ChickenMenu implements MenuInterface
{
    private $products;

    public function __construct(ProductInterface ...$products)
    {
        $this->products = $products;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getTotalCost(): float
    {
        $totalCost = 0;
        foreach ($this->products as $product) {
            $totalCost += $product->getPrice();
        }
        return $totalCost;
    }
}
