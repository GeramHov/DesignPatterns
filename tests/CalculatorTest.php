<?php

declare(strict_types=1);

namespace Tests;

use App\Calculator\Factory\AdditionFactory;
use App\Calculator\Factory\SubstractionFactory;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $additionFactory = new AdditionFactory();
        $additionCalculator = $additionFactory->calculationType();
        $resultAddition = $additionCalculator->calculate(99, 1);

        $expectedResultAddition = 100;

        $this->assertEquals($expectedResultAddition, $resultAddition);
    }

    public function testSubstraction()
    {
        $substractionFactory = new SubstractionFactory();
        $substractionCalculator = $substractionFactory->calculationType();
        $resultSubstraction = $substractionCalculator->calculate(100, 1);

        $expectedResultSubstraction = 99;

        $this->assertEquals($expectedResultSubstraction, $resultSubstraction);
    }
}
