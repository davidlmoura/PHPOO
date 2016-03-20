<?php

require_once "Cliente.php";

foreach($cliente as $cli) {

    echo "<a href='dados.php?id=".$cli->id."'>".$cli->nome."</a><br />";

}