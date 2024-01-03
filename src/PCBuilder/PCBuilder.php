<?php

namespace App\PCBuilder;

use App\PCBuilder\Interfaces\BuilderInterface;
use App\PCBuilder\Interfaces\ComputerInterface;
use App\PCBuilder\Interfaces\PartInterface;

class PCBuilder implements BuilderInterface
{
    private $components = [];

    public function getComputer(): ComputerInterface
    {
        return new Desktop(...array_values($this->components));
    }

    public function setPart(PartInterface $part): self
    {
        $this->components[get_class($part)] = $part;
        return $this;
    }
}
