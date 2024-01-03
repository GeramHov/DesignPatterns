<?php

namespace App\MealBuilder\Interfaces;

interface MenuInterface
{
    public function getProducts(): array;
    public function getTotalCost(): float;
}
