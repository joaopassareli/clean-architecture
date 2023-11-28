<?php

namespace Project\CleanArchitecture\tests;

use PHPUnit\Framework\TestCase;
use Project\CleanArchitecture\Dominio\Aluno\Cpf;

class CpfTest extends TestCase
{
    public function testCpfComNumeroNoFormatoInvalidoNaoPoderExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Cpf('12345678910');
    }
    
    public function testCpfPodeSerRepresentadoComoString()
    {
        $cpf = new Cpf('123.456.789-10');
        $this->assertSame('123.456.789-10', (string) $cpf);
    }
}
