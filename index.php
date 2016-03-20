<?php

require_once "Cliente.php";

function cmp($a, $b) {
    return $a['id'] > $b['id'];
}

if($_GET['ordem'] == 1)
{
    rsort($cliente);
}

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
         <?   if($_GET['ordem'] == 1)
            {
                echo '<form class="form-search span6" id="busca" name="busca" action="?ordem=0" method="post">
                <div class="input-prepend pesquisar">
                    <button type="submit" class="btn buscar gradient">Ordem Crescente</button>
                </div>
    		</form>';
            } else {
             echo '<form class="form-search span6" id="busca" name="busca" action="?ordem=1" method="post">
                <div class="input-prepend pesquisar">
                    <button type="submit" class="btn buscar gradient">Ordem Decrescente</button>
                </div>
    		</form>';
         }
         ?>
							<div class="titulo span12">LISTA DE CLIENTES
			</div>
					</div>
        <div class="dados">

        <?    foreach($cliente as $cli) {

            echo "<div class='cinza'>
                <div class='row'>
                    <div class='span9 nome'>
                    ".$cli->nome."
                    </div>
                    <a href='dados.php?id=".$cli->id ."'><div class='span2 exportar'><i class='icon-download-alt icon-white'></i> ver dados</div></a>
                </div>
            </div>";
            // echo "<a href='dados.php?id=".$cli->id."'>".$cli->nome."</a><br />";

            }
        ?>

		</div>
    </div>
</body>
</html>