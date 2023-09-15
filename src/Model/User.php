<?php

namespace Pribeiro\Tdd\Model;

class User
{
    private string $name;
    private int $idade;

    public function __construct(string $name, int $idade)
    {
        $this->name = $name;
        $this->idade = $idade;
    }

    /**
     * @return int
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}