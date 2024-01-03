<?php

namespace App\PCBuilder;

use App\PCBuilder\Interfaces\ComputerInterface;
use App\PCBuilder\Interfaces\PartInterface;

class Desktop implements ComputerInterface
{
    private $components = [];

    public function __construct(PartInterface ...$parts)
    {
        foreach ($parts as $part) {
            $this->components[get_class($part)] = $part;
        }
    }

    public function getComponent($partClassName): PartInterface
    {
        return $this->components[$partClassName];
    }
}
