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

$cliente[0] = new Cliente("1","David Luiz de Moura","96031536","01019200910","david@teste.com");
$cliente[1] = new Cliente("2","Vicente Luiz de Moura","96565456","12548512547","vicente@teste.com");
$cliente[2] = new Cliente("3","Patrick Deleon Schvartz","92547411","00015215222","patrick@teste.com");
$cliente[3] = new Cliente("4","Sirlei Isabel Fae de Moura","91221122","11221122122","sirlei@teste.com");
$cliente[4] = new Cliente("5","Paulo Sato","94784512","52885522112","sirlei@teste.com");
$cliente[5] = new Cliente("6","Wesley Safadao","91227788","99556622321","wesley@safadao.com");
$cliente[6] = new Cliente("7","Natacha Cerchiari Mattos","95774411","99552211447","natacha@teste.com");
$cliente[7] = new Cliente("8","Rogerio Lo Bozza","99992211","11448855221","rogerio@teste.com");
$cliente[8] = new Cliente("9","Guilherme Osty Washigton","91242424","24242524242","guilherme@teste.com");
$cliente[9] = new Cliente("10","Alisson Diniz Marcondes","99884811","99995522114","alisson@teste.com");