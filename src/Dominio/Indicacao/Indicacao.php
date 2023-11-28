<?php

namespace Project\CleanArchitecture\Dominio\Indicacao;

use Project\CleanArchitecture\Dominio\Aluno\Aluno;


class Indicacao
{
    public function __construct(Aluno $indicado, Aluno $indicante)
    {
        $this->indicado = $indicado;
        $this->indicante = $indicante;
        $this->date = new \DateTimeImmutable();
    }
}
