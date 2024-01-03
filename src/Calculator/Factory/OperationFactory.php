<?php

namespace App\Calculator\Factory;

use App\Calculator\Interfaces\CalculationInterface;

abstract class OperationFactory
{
    abstract public function calculationType(): CalculationInterface;
}
