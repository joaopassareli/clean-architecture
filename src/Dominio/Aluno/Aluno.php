<?php

namespace Project\CleanArchitecture\Dominio\Aluno;

use Project\CleanArchitecture\Dominio\Aluno\Cpf;
use Project\CleanArchitecture\Dominio\Aluno\Email;
use Project\CleanArchitecture\Dominio\Aluno\Telefone;


class Aluno
{
    private string $nome;
    private Email $email;
    private Cpf $cpf;
    private array $telefones;

    
    public static function comNomeEmailCpf( string $nome, string $email, string $cpf): self
    {
        return new Aluno(
            $nome,
            new Email($email),
            new Cpf($cpf)
        );
    }
    
    public function __construct(string $nome, Email $email, Cpf $cpf)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefones = [];
    }

    public function adicionarTelefone(string $ddd, string $numero): self
    {
        $this->telefones[] = new Telefone($ddd, $numero);
        return $this;
    }

    public function cpf(): string
    {
        return $this->cpf;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function email(): string
    {
        return $this->email;
    }

    /**
     * @return Telefone[]
     */
    public function telefones(): array
    {
        return $this->telefones;
    }
}
