<?php

namespace Project\CleanArchitecture\Aluno;

use Project\CleanArchitecture\Projetos\src\Cpf;
use Project\CleanArchitecture\Projetos\src\Email;
use Project\CleanArchitecture\Projetos\src\Telefone;

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
