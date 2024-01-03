<?php

namespace App\PCBuilder;

use App\PCBuilder\Interfaces\PartInterface;

abstract class Part implements PartInterface
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
