<?php

interface ClienteInterface
{
    public function getClassificacao();
    public function setClassificacao($classificacao);

    public function getEnderecoCobranca();
    public function setEnderecoCobranca($endereco_cobranca);
}