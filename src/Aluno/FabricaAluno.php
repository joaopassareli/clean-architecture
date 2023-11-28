<?php

namespace Project\CleanArchitecture\Aluno;

use Project\CleanArchitecture\Aluno\Cpf;
use Project\CleanArchitecture\Aluno\Aluno;
use Project\CleanArchitecture\Aluno\Email;

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
