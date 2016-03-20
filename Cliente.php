<?php

class Cliente
{
    public $id;
    public $nome;
    public $telefone;
    public $cpf;
    public $email;

    function __construct($id,$nome,$telefone,$cpf,$email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->email = $email;
    }
}

$cliente = array();

$cliente[0] = new Cliente("1","David","96031536","01019200910","david@teste.com");
$cliente[1] = new Cliente("2","Vicente","96565456","12548512547","vicente@teste.com");
$cliente[2] = new Cliente("3","Patrick","92547411","00015215222","patrick@teste.com");
$cliente[3] = new Cliente("4","Sirlei","91221122","11221122122","sirlei@teste.com");
$cliente[4] = new Cliente("5","Sato","94784512","52885522112","sirlei@teste.com");
$cliente[5] = new Cliente("6","Wesley","91227788","99556622321","wesley@safadao.com");
$cliente[6] = new Cliente("7","Natacha","95774411","99552211447","natacha@teste.com");
$cliente[7] = new Cliente("8","Rogerio","99992211","11448855221","rogerio@teste.com");
$cliente[8] = new Cliente("9","Guilherme","91242424","24242524242","guilherme@teste.com");
$cliente[9] = new Cliente("10","Alisson","99884811","99995522114","alisson@teste.com");