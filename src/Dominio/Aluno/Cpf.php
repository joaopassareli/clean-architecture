<?php

namespace Project\CleanArchitecture\Dominio\Aluno;


use InvalidArgumentException;

class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->setCpf($cpf);
    }

    private function setCpf(string $cpf): void
    {
        $opcoes = [
            'options' => [
                'regexp' => '/\d{3}\.\d{3}\.\d{3}\-\d{2}/'
            ]
        ];

        if (filter_var($cpf, FILTER_VALIDATE_REGEXP, $opcoes) == false) {
            throw new InvalidArgumentException('CPF no formato inválido');
        }

        $this->cpf = $cpf;
    }

    public function __toString(): string
    {
        return $this->cpf;
    }
}