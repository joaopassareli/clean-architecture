<?php

namespace Project\CleanArchitecture\Dominio\Aluno;

use Project\CleanArchitecture\Dominio\Aluno\Cpf;
use Project\CleanArchitecture\Dominio\Aluno\Aluno;
use Project\CleanArchitecture\Dominio\Aluno\Email;

class FabricaAluno
{
    private Aluno $aluno;

    public function comNomeEmailCpf(string $nome, string $email, string $cpf): self
    {
        $this->aluno = new Aluno(
            $nome,
            new Email($email),
            new Cpf($cpf)
        );
        return $this;
    }

    public function adicionaTelefone(string $ddd, string $telefone): self
    {
        $this->aluno->adicionarTelefone($ddd, $telefone);
        return $this;
    }

    public function aluno(): Aluno
    {
        return $this->aluno;
    }
}
