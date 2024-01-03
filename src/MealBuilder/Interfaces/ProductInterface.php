<?php

namespace App\MealBuilder\Interfaces;

interface ProductInterface
{
    public function getName(): string;

    public function getPrice(): float;
}
