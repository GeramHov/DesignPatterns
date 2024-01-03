<?php

namespace App\ShoppingCart\Factory;

use App\ShoppingCart\Interfaces\ProductFactoryInterface;
use App\ShoppingCart\MyShopProduct;

class MyShopProductFactory implements ProductFactoryInterface
{
    protected $database;

    public function __construct()
    {
        $this->database = [
            'BumperSticker1' => 'Cool bumper sticker',
            'CoffeeTableBook5' => 'Coffee Table book',
        ];
    }

    public function createProduct($productCode)
    {
        if (isset($this->database[$productCode])) {
            $description = $this->database[$productCode];
            return new MyShopProduct($productCode, $description);
        } else {
            return null;
        }
    }
}
