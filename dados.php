<?php

require_once "Cliente.php";

$id = (int)$_GET['id'];


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
        if($id == $cli->id) {
     ?>
            <div align="center">
                <div class="row">
                    <div class="span9 nome" align="center">
                    Nome: <b><?=$cli->nome?></b><br />
                    CPF: <b><?=$cli->cpf?></b><br />
                    E-mail: <b><?=$cli->email?></b><br />
                    Telefone: <b><?=$cli->telefone?></b>
                    </div>
                </div>
            </div>
     <?   }
        }
     ?>

    </div>
</div>
<div></div>
</body>
</html>