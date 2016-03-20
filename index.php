<?php

require_once "Cliente.php";

$cliente = array();

$cliente[0] = new Cliente("David","96031536","01019200910","david@teste.com");
$cliente[1] = new Cliente("Vicente","96565456","12548512547","vicente@teste.com");
$cliente[2] = new Cliente("Patrick","92547411","00015215222","patrick@teste.com");
$cliente[3] = new Cliente("Sirlei","91221122","11221122122","sirlei@teste.com");
$cliente[4] = new Cliente("Sato","94784512","52885522112","sirlei@teste.com");
$cliente[5] = new Cliente("Wesley","91227788","99556622321","wesley@safadao.com");
$cliente[6] = new Cliente("Natacha","95774411","99552211447","natacha@teste.com");
$cliente[7] = new Cliente("Rogerio","99992211","11448855221","rogerio@teste.com");
$cliente[8] = new Cliente("Guilherme","91242424","24242524242","guilherme@teste.com");
$cliente[9] = new Cliente("Alisson","99884811","99995522114","alisson@teste.com");

foreach($cliente as $cli) {

    echo $cli->nome.'<br />';
}