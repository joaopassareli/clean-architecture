<?php

namespace Project\CleanArchitecture\Projetos\src;

class Telefone
{
    private string $ddd;
    private string $numero;

    public function __construct(string $ddd, string $numero)
    {
        $this->setDdd($ddd);
        $this->setNumero($numero);
    }

    private function serDdd(string $ddd): void
    {
        if(preg_match('/\d{2}/', $ddd) !== 1) {
            throw new \InvalidArgumentExcption(message: 'DDD inv�lido');
        }
        $this->ddd = $ddd
    }

    private function setNumero(string $numero): void
    {
        if(preg_match('/\d{8,9}/', $numero) !== 1) {
            throw new \InvalidArgumentException(message: 'N�mero de telefone inv�lido');
        }
    }

    public function __toString(): string
    {
        return "({$this->ddd}) {$this->numero}";
    }
}
