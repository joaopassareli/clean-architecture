<?php

namespace Project\CleanArchitecture\tests\App\Aluno;

use PHPUnit\Framework\TestCase;
use Project\CleanArchitecture\Dominio\Aluno\Cpf;
use Project\CleanArchitecture\App\Aluno\MatricularAluno\MatricularAluno;
use Project\CleanArchitecture\App\Aluno\MatricularAluno\MatricularAlunoDto;
use Project\CleanArchitecture\Infraestrutura\Aluno\RepositorioAlunoEmMemoria;

class MatricularAlunoTest extends TestCase
{
    public function testAlunoDeveSerAdicionadoAoRepositorio()
    {
        $dadosAluno = new MatricularAlunoDto(
            '123.456.789-10',
            'Teste Unit',
            'teste@teste.com'
        );
        $repositorio = new RepositorioAlunoEmMemoria();
        $useCase = new MatricularAluno($repositorio);
        $useCase->executa($dadosAluno);

        $aluno = $repositorio->buscarPorCpf(new Cpf('123.456.789-10'));
        $this->assertSame('Teste Unit', (string) $aluno->nome());
        $this->assertSame('teste@teste.com', (string) $aluno->email());
        $this->assertEmpty($aluno->telefones());
    }
}