<?php

namespace App\MySQLBuilder\Interfaces;

interface QueryBuilderInterface
{
    public function reset();

    public function select(string $table, array $columns): self;

    public function where(string $condition): self;

    public function limit(int $offset, int $count): self;

    public function get(): string;
}
