<?php

namespace Project\CleanArchitecture\tests;

use PHPUnit\Framework\TestCase;
use Project\CleanArchitecture\Projetos\src\Telefone;

class TelefoneTest extends TestCase
{
    public function testTelefoneDevePoderSerRepresentadoComoString()
    {
        $telefone = new Telefone(ddd: '24', numero: '22222222');
        $this->assertSame('(24)22222222', (string) $telefone);
    }

    public function testTelefoneComDddInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('DDD inv�lido');
        new Telefone('ddd', numero: '22222222');
    }

    public function testTelefoneComNumeroInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentsException::class);
        $this->expectExceptionMessage('N�mero de telefone inv�lido');
        new Telefone('24', numero: 'numero');
    }
}