<?php

class Relatorio{
    
    private $codigo;
    private $nome;
    private $dataInclusao;
    private $dataInicio;
    private $dataFinal;
    private $objVeiculo;
    private $objSetor;

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
 
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }
 
    public function getDataFinal()
    {
        return $this->dataFinal;
    }

    public function setDataFinal($dataFinal)
    {
        $this->dataFinal = $dataFinal;

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
 
    public function getObjSetor()
    {
        return $this->objSetor;
    }

    public function setObjSetor($objSetor)
    {
        $this->objSetor = $objSetor;

        return $this;
    }
}