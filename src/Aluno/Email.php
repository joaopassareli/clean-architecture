<?php

namespace Project\CleanArchitecture\Aluno;

use InvalidArgumentException;

class Email
{
    private string $email;

    public function __construct(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidArgumentException('Endereço de e-mail inválido!');
        }

        $this->email = $email;
    }

    public function __toString(): string
    {
        return $this->email;
    }
}
