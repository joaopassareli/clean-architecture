<?php

namespace Project\CleanArchitecture\Dominio\Aluno;

use InvalidArgumentException;

class Email
{
    private string $email;

    public function __construct(string $email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidArgumentException("Endere�o de e-mail inv�lido! - $email");
        }

        $this->email = $email;
    }

    public function __toString(): string
    {
        return $this->email;
    }
}
