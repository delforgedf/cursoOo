<?php

class Cliente implements ClienteInterface , ClienteEspecialInterface
{
    protected $nome;
    protected $endereco;
    protected $importancia;
    protected $enderecoEspecial;

    public function getImportancia()
    {
        return $this->importancia;
    }

    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getEnderecoEspecial()
    {
        return $this->enderecoEspecial;
    }

    public function setEnderecoEspecial($enderecoEspecial)
    {
        $this->enderecoEspecial = $enderecoEspecial;
        return $this;
    }
}