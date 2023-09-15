<?php

namespace Pribeiro\Tdd\Service;

use Pribeiro\Tdd\Model\Show;
use Pribeiro\Tdd\Model\User;

class Avaliador
{
    private User $user;
    private Show $show;

    public function __construct(User $user, Show $show)
    {
        $this->user = $user;
        $this->show = $show;
    }

    public function validar(): bool
    {
        $idade = $this->user->getIdade();

        if ($idade > 18 && $idade < 100) {
            return true;
        }
        return false;
    }
}