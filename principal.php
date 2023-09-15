<?php

require 'vendor/autoload.php';


$paulo = new \Pribeiro\Tdd\Model\User('Paulo', 26);

echo $paulo->getIdade();
