<?php

class Cliente
{
    public $nome;
    public $telefone;
    public $cpf;
    public $email;

    function __construct($nome,$telefone,$cpf,$email)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->email = $email;
    }
}