<?php

use Pribeiro\Tdd\Model\Show;
use Pribeiro\Tdd\Model\User;
use Pribeiro\Tdd\Service\Avaliador;

require 'vendor/autoload.php';


$paulo = new User('Paulo', 26);
$belo = new Show('Belo');

$entrada = new Avaliador($paulo, $belo);

echo $paulo->getIdade() . PHP_EOL;
echo $belo->getName() . PHP_EOL;

echo $entrada->validar() . PHP_EOL;