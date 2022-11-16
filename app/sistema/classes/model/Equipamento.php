<?php

class Equipamento{
    
    private $codigo;
    private $tacto;
    private $tipoFrequencia;
    private $modelo;
    private $numeroSerie;
    private $dataVencimento;
    private $torque;
    private $descricaoOperacao;
    private $dataCalibragem;
    private $dadosUtimaCalibragem;
    private $media;
    private $dispersao;
    private $observacao;
    private $qtdDiasVencimento;
    
    private $objColaborador;
    private $objStatus;
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
 
    public function getTacto()
    {
        return $this->tacto;
    }

    public function setTacto($tacto)
    {
        $this->tacto = $tacto;

        return $this;
    }
 
    public function getTipoFrequencia()
    {
        return $this->tipoFrequencia;
    }

    public function setTipoFrequencia($tipoFrequencia)
    {
        $this->tipoFrequencia = $tipoFrequencia;

        return $this;
    }
 
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }
 
    public function getNumeroSerie()
    {
        return $this->numeroSerie;
    }

    public function setNumeroSerie($numeroSerie)
    {
        $this->numeroSerie = $numeroSerie;

        return $this;
    }
 
    public function getDataVencimento()
    {
        return $this->dataVencimento;
    }

    public function setDataVencimento($dataVencimento)
    {
        $this->dataVencimento = $dataVencimento;

        return $this;
    }
 
    public function getObjStatus()
    {
        return $this->objStatus;
    }

    public function setObjStatus($objStatus)
    {
        $this->objStatus = $objStatus;

        return $this;
    }
 
    public function getTorque()
    {
        return $this->torque;
    }

    public function setTorque($torque)
    {
        $this->torque = $torque;

        return $this;
    }
 
    public function getDescricaoOperacao()
    {
        return $this->descricaoOperacao;
    }

    public function setDescricaoOperacao($descricaoOperacao)
    {
        $this->descricaoOperacao = $descricaoOperacao;

        return $this;
    }
 
    public function getObjColaborador()
    {
        return $this->objColaborador;
    }

    public function setObjColaborador($objColaborador)
    {
        $this->objColaborador = $objColaborador;

        return $this;
    }
 
    public function getDataCalibragem()
    {
        return $this->dataCalibragem;
    }

    public function setDataCalibragem($dataCalibragem)
    {
        $this->dataCalibragem = $dataCalibragem;

        return $this;
    }
 
    public function getDadosUtimaCalibragem()
    {
        return $this->dadosUtimaCalibragem;
    }

    public function setDadosUtimaCalibragem($dadosUtimaCalibragem)
    {
        $this->dadosUtimaCalibragem = $dadosUtimaCalibragem;

        return $this;
    }
 
    public function getMedia()
    {
        return $this->media;
    }

    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }
 
    public function getDispersao()
    {
        return $this->dispersao;
    }

    public function setDispersao($dispersao)
    {
        $this->dispersao = $dispersao;

        return $this;
    }
 
    public function getObservacao()
    {
        return $this->observacao;
    }

    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    public function getQtdDiasVencimento()
    {
        return $this->qtdDiasVencimento;
    }

    public function setQtdDiasVencimento($qtdDiasVencimento)
    {
        $this->qtdDiasVencimento = $qtdDiasVencimento;

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