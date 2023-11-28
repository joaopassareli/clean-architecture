<?php

namespace Project\CleanArchitecture\tests;

use PHPUnit\Framework\TestCase;
use Project\CleanArchitecture\Dominio\Aluno\Telefone;

class TelefoneTest extends TestCase
{
    public function testTelefoneDevePoderSerRepresentadoComoString()
    {
        $telefone = new Telefone('24', '22222222');
        $this->assertSame('(24) 22222222', (string) $telefone);
    }

    public function testTelefoneComDddInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('DDD inv�lido');
        new Telefone('ddd', '22222222');
    }

    public function testTelefoneComNumeroInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('N�mero de telefone inv�lido');
        new Telefone('24', 'numero');
    }
}