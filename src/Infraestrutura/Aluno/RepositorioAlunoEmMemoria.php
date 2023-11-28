<?php

namespace Project\CleanArchitecture\Infraestrutura\Aluno;

use Project\CleanArchitecture\Dominio\Aluno\Cpf;
use Project\CleanArchitecture\Dominio\Aluno\Aluno;
use Project\CleanArchitecture\Dominio\Aluno\InterfaceAluno;

class RepositorioAlunoEmMemoria implements InterfaceAluno
{
    private array $alunos;

    public function adicionar(Aluno $aluno): void
    {
        $this->alunos[] = $aluno;
    }

    public function buscarPorCpf(Cpf $cpf): Aluno
    {
        $alunosFiltrados = array_filter(
            $this->alunos,
            fn (Aluno $aluno) => $aluno->cpf() == $cpf
        );

        if (count($alunosFiltrados) != 1) {
            throw new \DomainException();
        }
        return $alunosFiltrados[0];
    }

    /**
     * @return Aluno[]
     */
    public function buscaTodos(): array
    {
        return $this->alunos;
    }
}
