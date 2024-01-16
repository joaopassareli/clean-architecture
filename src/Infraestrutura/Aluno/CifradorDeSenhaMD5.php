<?php

namespace Project\CleanArchitecture\Infraestrutura\Aluno;

use Project\CleanArchitecture\Dominio\Aluno\CifradorDeSenha;

class CidradorDeSenhaMD5 implements CifradorDeSenha
{
    public function cifrar(string $senha): string
    {
        return md5($senha);
    }

    public function verificar(string $senhaTexto, string $senhaCifrada): bool
    {
        return md5($senhaTexto) == $senhaCifrada;
    }
}
