<?php

require_once "Cliente.php";

$id = (int)$_GET['id'];

foreach ($cliente as $cli)
{
    if($id == $cli->id)
    {
        echo $cli->nome."<br />";
        echo $cli->cpf."<br />";
        echo $cli->email."<br />";
        echo $cli->telefone."<br /><br />";
    }
}