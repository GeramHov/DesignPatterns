<?php

declare(strict_types=1);

namespace Tests;

use App\ShoppingCart\Factory\MyShopProductFactory;
use App\ShoppingCart\Shop;
use PHPUnit\Framework\TestCase;

final class ShopTest extends TestCase
{
    public function testListProducts()
    {
        $shop = new Shop(new MyShopProductFactory);

        $productsToList = ['BumperSticker1', 'CoffeeTableBook5'];

        $targetOutput = <<<EOS
BumperSticker1 - Cool bumper sticker
CoffeeTableBook5 - Coffee Table book
EOS;

        $this->assertEquals($targetOutput, $shop->listProducts($productsToList));
    }
}
