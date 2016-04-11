<?php


class ClienteJuridico extends Cliente
{
    private $cnpj;

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }


}

$cliente = array();

$cliente[0] = new Cliente();
$cliente[0]->setId("1")
           ->setNome("David Teste")
           ->setEmail("davidteste@hotmail.com")
           ->setTelefone("33325-9565")
           ->setCpf("010.192.009-10")
           ->setClassificacao("4");
$cliente[1] = new Cliente();
$cliente[1]->setId("2")
           ->setNome("Vicente Moura")
           ->setEmail("vicentemoura@gmail.com")
           ->setTelefone("99325-0065")
           ->setCpf("254.942.959-15")
           ->setClassificacao("5");
$cliente[2] = new ClienteJuridico();
$cliente[2]->setId("3")
           ->setNome("Empresa do David")
           ->setEmail("empresa1@gmail.com")
           ->setTelefone("5555-0065")
           ->setCnpj("04.000.999/0001-24")
           ->setClassificacao("1");
$cliente[3] = new ClienteJuridico();
$cliente[3]->setId("4")
           ->setNome("Empresa do Vicente")
           ->setEmail("empresa44@gmail.com")
           ->setTelefone("4444-0065")
           ->setCnpj("04.475.157/0001-24")
           ->setClassificacao("3");