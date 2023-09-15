<?php

use Pribeiro\Tdd\Model\Show;
use Pribeiro\Tdd\Model\User;
use Pribeiro\Tdd\Service\Ingresso;

require 'vendor/autoload.php';


$paulo = new User('Paulo', 26);
$belo = new Show('Belo');

$entrada = new Ingresso($paulo, $belo);

echo $paulo->getIdade() . PHP_EOL;
echo $belo->getName() . PHP_EOL;

echo $entrada->validar() . PHP_EOL;