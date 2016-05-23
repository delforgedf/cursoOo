<?php

interface ClienteInterface
{

    public function getNome();
    public function setNome($nome);
    public function getEndereco();
    public function setEndereco($endereco);
    public function getImportancia();
    public function setImportancia($importancia);
}