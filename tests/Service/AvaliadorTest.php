<?php

namespace Pribeiro\Tdd\Tests\Service;

use PHPUnit\Framework\TestCase;
use Pribeiro\Tdd\Model\Show;
use Pribeiro\Tdd\Model\User;
use Pribeiro\Tdd\Service\Avaliador;

class AvaliadorTest extends TestCase
{
    public function testsAvaliandoSeAIdadeRetornaVerdadeiro()
    {
        // Arrange - Given / Preparamos o cenário do teste
        $paulo = new User('Paulo', 26);
        $belo = new Show('Belo');
        $entrada = new Avaliador($paulo, $belo);
        // Act - When / Executamos o código a ser testado
        $result = $entrada->validar();
        // Assert - Then / Verificamos se a saída é a esperada
        self::assertEquals(true, $result);
    }

    public function testsAvaliandoSeAIdadeRetornaFalsoComNumeroMenorPermetido()
    {
        // Arrange - Given / Preparamos o cenário do teste
        $paulo = new User('Paulo', 13);
        $belo = new Show('Belo');
        $entrada = new Avaliador($paulo, $belo);
        // Act - When / Executamos o código a ser testado
        $result = $entrada->validar();
        // Assert - Then / Verificamos se a saída é a esperada
        self::assertEquals(false, $result);
    }

    public function testsAvaliandoSeAIdadeRetornaFalsoComNumeroMaiorPermetido()
    {
        // Arrange - Given / Preparamos o cenário do teste
        $paulo = new User('Paulo', 101);
        $belo = new Show('Belo');
        $entrada = new Avaliador($paulo, $belo);
        // Act - When / Executamos o código a ser testado
        $result = $entrada->validar();
        // Assert - Then / Verificamos se a saída é a esperada
        self::assertEquals(false, $result);
    }

}