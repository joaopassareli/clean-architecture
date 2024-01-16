<?php

use Project\CleanArchitecture\Dominio\Aluno\Aluno;
use Project\CleanArchitecture\Infraestrutura\Aluno\RepositorioAlunoEmMemoria;

require 'vendor/autoload.php';

$nome = $argv[1];
$email = $argv[2];
$cpf = $argv[3];
$ddd = $argv[4];
$telefone = $argv[5];

$aluno = Aluno::comNomeEmailCpf($nome, $email, $cpf)->adicionarTelefone($ddd, $telefone);
$repository = new RepositorioAlunoEmMemoria();
$repository->adicionar($aluno);
var_dump($argc);