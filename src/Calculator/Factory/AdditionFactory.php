<?php

namespace App\Calculator\Factory;

use App\Calculator\Interfaces\CalculationInterface;
use App\Calculator\AdditionCalculation;

class AdditionFactory extends OperationFactory
{
    public function calculationType(): CalculationInterface
    {
        return new AdditionCalculation();
    }
}
