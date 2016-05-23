<?php

class pessoaJuridica extends Cliente implements ClienteInterface
{

    private $cnpj;

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }



}