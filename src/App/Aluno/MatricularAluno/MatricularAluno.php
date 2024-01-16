<?php

namespace Project\CleanArchitecture\App\Aluno\MatricularAluno;

use Project\CleanArchitecture\Dominio\Aluno\Aluno;
use Project\CleanArchitecture\App\Aluno\MatricularAluno\MatricularAlunoDto;
use Project\CleanArchitecture\Infraestrutura\Aluno\RepositorioAlunoEmMemoria;

class MatricularAluno
{
    private RepositorioAlunoEmMemoria  $repository;

    public function __construct(RepositorioAlunoEmMemoria $repository)
    {
        $this->repository = $repository;
    }

    public function executa(MatricularAlunoDto $dados): void
    {
        $aluno = Aluno::comNomeEmailCpf(
            $dados->nomeAluno,
            $dados->emailAluno,
            $dados->cpfAluno
        );

        $this->repository->adicionar($aluno);
    }
}
