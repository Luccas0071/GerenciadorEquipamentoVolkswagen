<?php

class Planilha{
    private $codigo;
    private $tacto;
    private $tipoFrequencia;
    private $modelo;
    private $numeroSerie;
    private $venciamento;
    private $status;
    private $torque;
    private $descricaoOperacaoCarro;
    private $tecnico;
    private $dataCalibracao;
    private $dadosUltimaCalibracao;
    private $media;
    private $dispersao;
    private $observaca;
 
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
 
    public function getVenciamento()
    {
        return $this->venciamento;
    }

    public function setVenciamento($venciamento)
    {
        $this->venciamento = $venciamento;

        return $this;
    }
 
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

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
 
    public function getDescricaoOperacaoCarro()
    {
        return $this->descricaoOperacaoCarro;
    }

    public function setDescricaoOperacaoCarro($descricaoOperacaoCarro)
    {
        $this->descricaoOperacaoCarro = $descricaoOperacaoCarro;

        return $this;
    }
 
    public function getTecnico()
    {
        return $this->tecnico;
    }

    public function setTecnico($tecnico)
    {
        $this->tecnico = $tecnico;

        return $this;
    }
 
    public function getDataCalibracao()
    {
        return $this->dataCalibracao;
    }

    public function setDataCalibracao($dataCalibracao)
    {
        $this->dataCalibracao = $dataCalibracao;

        return $this;
    }
 
    public function getDadosUltimaCalibracao()
    {
        return $this->dadosUltimaCalibracao;
    }

    public function setDadosUltimaCalibracao($dadosUltimaCalibracao)
    {
        $this->dadosUltimaCalibracao = $dadosUltimaCalibracao;

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
 
    public function getObservaca()
    {
        return $this->observaca;
    }

    public function setObservaca($observaca)
    {
        $this->observaca = $observaca;

        return $this;
    }
}