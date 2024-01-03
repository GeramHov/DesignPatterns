<?php

namespace App\Calculator;

use App\Calculator\Interfaces\CalculationInterface;

class SubstractionCalculation implements CalculationInterface
{
    public function calculate($a, $b)
    {
        return $a - $b;
    }
}
