<?php

namespace Project\CleanArchitecture\Infraestrutura\Aluno;

use Project\CleanArchitecture\Dominio\Aluno\CifradorDeSenha;

class CifradorDeSenhaPhp implements CifradorDeSenha
{
    public function cifrar(string $senha): string
    {
        return password_hash($senha, PASSWORD_ARGON2ID);
    }

    public function verificar(string $senhaTexto, string $senhaCifrada): bool
    {
        return password_verify($senhaTexto, $senhaCifrada);
    }
}
