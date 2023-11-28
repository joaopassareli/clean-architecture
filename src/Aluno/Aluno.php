<?php

namespace Project\CleanArchitecture\Aluno;

use Project\CleanArchitecture\Aluno\Cpf;
use Project\CleanArchitecture\Aluno\Email;
use Project\CleanArchitecture\Aluno\Telefone;


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
    }

    public function adicionarTelefone(string $ddd, string $numero): self
    {
        $this->telefones[] = new Telefone($ddd, $numero);
        return $this;
    }
}
