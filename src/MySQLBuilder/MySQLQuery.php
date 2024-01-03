<?php

namespace App\MySQLBuilder;

use App\MySQLBuilder\Interfaces\QueryBuilderInterface;

class MySQLQuery implements QueryBuilderInterface
{
    private $select;
    private $from;
    private $where;
    private $limit;

    public function reset()
    {
        $this->select = null;
        $this->from = null;
        $this->where = null;
        $this->limit = null;

        return $this;
    }

    public function select(string $table, array $columns): self
    {
        $this->reset();
        $this->select = 'SELECT ' . implode(', ', $columns);
        $this->from = ' FROM ' . $table;

        return $this;
    }

    public function where(string $condition): self
    {
        if ($this->where === null) {
            $this->where = ' WHERE ' . $condition;
        } else {
            $this->where .= ' AND ' . $condition;
        }

        return $this;
    }

    public function limit(int $offset, int $count): self
    {
        $this->limit = ' LIMIT ' . $offset . ', ' . $count;

        return $this;
    }

    public function get(): string
    {
        return $this->select . $this->from . $this->where . $this->limit;
    }
}
