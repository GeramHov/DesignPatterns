<?php

namespace App\PCBuilder\Interfaces;

interface ComputerInterface
{
    public function getComponent($partClassName): PartInterface;
}
