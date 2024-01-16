<?php

namespace Project\CleanArchitecture\App\Indicacao;

use Project\CleanArchitecture\Dominio\Aluno\Aluno;

interface EnviaEmailIndicacao
{
    public function envia(Aluno $indicado): void;
}
