<?php

namespace Project\CleanArchitecture\Dominio\Aluno;

interface CifradorDeSenha
{
    public function cifrar(string $senha): string;

    public function verificar(string $senhaTexto, string $senhaCifrada): bool;
}
