<?php

class Setor{
    
    private $codigo;
    private $nome;
    private $dataInclusao;
    private $objVeiculo;

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

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
 
    public function getDataInclusao()
    {
        return $this->dataInclusao;
    }

    public function setDataInclusao($dataInclusao)
    {
        $this->dataInclusao = $dataInclusao;

        return $this;
    }

    public function getObjVeiculo()
    {
        return $this->objVeiculo;
    }

    public function setObjVeiculo($objVeiculo)
    {
        $this->objVeiculo = $objVeiculo;

        return $this;
    }
}