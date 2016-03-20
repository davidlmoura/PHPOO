<?php

require_once "Cliente.php";

function cmp($a, $b) {
    return $a['id'] > $b['id'];
}

if($_GET['ordem'] == 1)
{
    rsort($cliente);
}

foreach($cliente as $cli) {

    echo "<a href='dados.php?id=".$cli->id."'>".$cli->nome."</a><br />";

}

if($_GET['ordem'] == 1)
{
    echo "<br /><br /><a href='?ordem=0'>Ordenar Crescente</a><br />";
} else {
    echo "<br /><br /><a href='?ordem=1'>Ordenar Decrescente</a><br />";
}