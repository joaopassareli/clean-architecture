<?php

namespace Project\CleanArchitecture\tests;

use PHPUnit\Framework\TestCase;
use Project\CleanArchitecture\Dominio\Aluno\Email;

class EmailTest extends TestCase
{
    public function testEmailFormatoInvalidoNaoPodeExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Email('email invalido');
    }
    
    public function testCpfPodeSerRepresentadoComoString()
    {
        $email = new Email('endereco@example.com.br');
        $this->assertSame('endereco@example.com.br', (string) $email);
    }
}
