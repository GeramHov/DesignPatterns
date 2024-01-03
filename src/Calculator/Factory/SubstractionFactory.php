<?php

namespace App\Calculator\Factory;

use App\Calculator\Interfaces\CalculationInterface;
use App\Calculator\SubstractionCalculation;

class SubstractionFactory extends OperationFactory
{
    public function calculationType(): CalculationInterface
    {
        return new SubstractionCalculation();
    }
}
