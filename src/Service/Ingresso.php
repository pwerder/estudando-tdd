<?php

namespace Pribeiro\Tdd\Service;

use Pribeiro\Tdd\Model\Show;
use Pribeiro\Tdd\Model\User;

class Ingresso
{
    private User $user;
    private Show $show;

    public function __construct(User $user, Show $show)
    {
        $this->user = $user;
        $this->show = $show;
    }

    public function validar(): string
    {
        $idade = $this->user->getIdade();

        if ($idade > 18 && $idade < 120) {
            return 'Entrada permetida para o show do(a): ' . $this->show->getName();
        }
        return 'Entrada negada para o show do(a): ' . $this->show->getName();
    }
}