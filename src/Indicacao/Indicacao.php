<?php

namespace Project\CleanArchitecture\Indicacao;

use Project\CleanArchitecture\Aluno\Aluno;

class Indicacao
{
    private Aluno $indicante;
    private Aluno $indicado;
    private \DateTimeImmutable $date;

    public function __construct(Aluno $indicado, Aluno $indicante)
    {
        $this->indicado = $indicado;
        $this->indicante = $indicante;
        $this->date = new \DateTimeImmutable();
    }
}
