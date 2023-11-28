<?php

namespace Project\CleanArchitecture\Dominio\Aluno;

use Project\CleanArchitecture\Dominio\Aluno\Cpf;
use Project\CleanArchitecture\Dominio\Aluno\Aluno;

interface InterfaceAluno
{
    public function adicionar(Aluno $aluno): void;
    public function buscarPorCpf(Cpf $cpf): Aluno;
    /** @return Aluno[] */
    public function buscaTodos(): array;
}
