<?php

declare(strict_types=1);

namespace Tests;

use App\MealBuilder\Burger;
use App\MealBuilder\ChickenMenu;
use App\MealBuilder\Drink;
use App\MealBuilder\VeggieMenu;
use PHPUnit\Framework\TestCase;

final class MealBuilderTest extends TestCase
{
    public function testVeggieMenu()
    {
        $burger = new Burger('Veggie Burger', 12);
        $drink = new Drink('Water', 1.5);

        $veggieMenu = new VeggieMenu($burger, $drink);

        $this->assertEquals(['Veggie Burger', 'Water'], array_map(fn ($product) => $product->getName(), $veggieMenu->getProducts()));
        $this->assertEquals(13.5, $veggieMenu->getTotalCost());
    }

    public function testChickenMenu()
    {
        $burger = new Burger('Chicken Burger', 15);
        $drink = new Drink('Sprite', 2);

        $chickenMenu = new ChickenMenu($burger, $drink);

        $this->assertEquals(['Chicken Burger', 'Sprite'], array_map(fn ($product) => $product->getName(), $chickenMenu->getProducts()));
        $this->assertEquals(17, $chickenMenu->getTotalCost());
    }
}
