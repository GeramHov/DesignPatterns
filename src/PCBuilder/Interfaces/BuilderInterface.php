<?php

namespace App\PCBuilder\Interfaces;

interface BuilderInterface
{
    public function getComputer(): ComputerInterface;

    public function setPart(PartInterface $part): self;
}
