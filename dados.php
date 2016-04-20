<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$id = (int)$_GET['id'];

$cliente = array();

$cliente[0] = new SON\Cliente\Types\Cliente();
$cliente[0]->setId("1")
    ->setNome("David Teste")
    ->setEndereco("Rua testelandia 145")
    ->setEmail("davidteste@hotmail.com")
    ->setTelefone("33325-9565")
    ->setCpf("010.192.009-10")
    ->setClassificacao("4");
$cliente[1] = new SON\Cliente\Types\Cliente();
$cliente[1]->setId("2")
    ->setNome("Vicente Moura")
    ->setEndereco("Rua teste 999")
    ->setEnderecoCobranca("Rua marai da luz 777")
    ->setEmail("vicentemoura@gmail.com")
    ->setTelefone("99325-0065")
    ->setCpf("254.942.959-15")
    ->setClassificacao("5");
$cliente[2] = new SON\Cliente\Types\ClienteJuridico();
$cliente[2]->setId("3")
    ->setNome("Empresa do David")
    ->setEndereco("Avenida teste 100")
    ->setEmail("empresa1@gmail.com")
    ->setTelefone("5555-0065")
    ->setCnpj("04.000.999/0001-24")
    ->setClassificacao("1");
$cliente[3] = new SON\Cliente\Types\ClienteJuridico();
$cliente[3]->setId("4")
    ->setNome("Empresa do Vicente")
    ->setEndereco("Avenida Setembro 300")
    ->setEnderecoCobranca("Rua Yuia 333")
    ->setEmail("empresa44@gmail.com")
    ->setTelefone("4444-0065")
    ->setCnpj("04.475.157/0001-24")
    ->setClassificacao("3");


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>PHPOO - School Of Net</title>

    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/download.css" rel="stylesheet" media="screen">
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="fundo">
<div class="linha"></div>
<div class="container topo">
    <div class="row">
            <form class="form-search span6" id="busca" name="busca" action="index.php" method="post">
                <div class="input-prepend pesquisar">
                    <button type="submit" class="btn buscar gradient">Voltar</button>
                </div>
    		</form>;
        <div class="titulo span12">DADOS DO CLIENTE
        </div>
    </div>
    <div class="dados">

     <?
     foreach ($cliente as $cli)
        {
        if($id == $cli->getId()) {
     ?>
            <div align="center">
                <div class="row">
                    <div class="span9 nome" align="center">
                    Nome: <b><?=$cli->getNome()?></b>

      <?
             for($i = 0; $i < $cli->getClassificacao(); $i++){

                echo "<img src='star.png' width='30' height='30' border='0'/>";

             } ?>

                        <br />
                        <? if(get_class($cli) == "Cliente") { ?>
                            CPF: <b><?=$cli->getCpf()?></b><br />
                        <? } else { ?>
                            CNPJ: <b><?=$cli->getCnpj()?></b><br />
                        <? } ?>

                    E-mail: <b><?=$cli->getEmail()?></b><br />
                    Endereço: <b><?=$cli->getEndereco()?></b><br />

                        <? if($cli->getEnderecoCobranca() != "") { ?>
                            Endereço de Cobrança: <b><?=$cli->getEnderecoCobranca()?></b><br />
                        <? } ?>

                    Telefone: <b><?=$cli->getTelefone()?></b>
                    </div>
                </div>
            </div>
     <?   }
        }
     ?>

    </div>
</div>
</body>
</html>