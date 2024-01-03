<?php

namespace App\PCBuilder\Interfaces;

interface MasterInterface
{
    public function build(): ComputerInterface;

    public function setBuilder(BuilderInterface $builder): void;

    public function getBuilder(): BuilderInterface;
}
