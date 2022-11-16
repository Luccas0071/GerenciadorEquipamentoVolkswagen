<?php
include_once '../classes/model/Equipamento.php';

class  EquipamentoForm {

    private $acao;
    private $codigo;
    private $tacto;
    private $tipoFrequencia;
    private $modelo;
    private $numeroSerie;
    private $dataVencimento;
    private $status;
    private $torque;
    private $descricaoOperacao;
    private $colaborador;
    private $dataCalibragem;
    private $dadosUtimaCalibragem;
    private $media;
    private $dispersao;
    private $observacao;
    private $qtdDiasVencimento;
    private $veiculo;
    private $setor;

    public function getAcao()
    {
        return $this->acao;
    }

    public function setAcao($acao)
    {
        $this->acao = $acao;

        return $this;
    }
 
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
 
    public function getDescricaoOperacao()
    {
        return $this->descricaoOperacao;
    }

    public function setDescricaoOperacao($descricaoOperacao)
    {
        $this->descricaoOperacao = $descricaoOperacao;

        return $this;
    }

    public function getColaborador()
    {
        return $this->colaborador;
    }

    public function setColaborador($colaborador)
    {
        $this->colaborador = $colaborador;

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

    public function getVeiculo()
    {
        return $this->veiculo;
    }
 
    public function setVeiculo($veiculo)
    {
        $this->veiculo = $veiculo;

        return $this;
    }

    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }
   
    public function transfereRequestForm($request){

        $this->setTacto($request['tacto']);
        $this->setTipoFrequencia($request['tipoFrequencia']);
        $this->setModelo($request['modelo']);
        $this->setNumeroSerie($request['numeroSerie']);
        $this->setDataVencimento($request['dataCalibragem']);
        $this->setStatus($request['statos']);
        $this->setTorque($request['torque']);
        $this->setDescricaoOperacao($request['descricaoOperacao']);
        $this->setColaborador($request['colaborador']);
        $this->setDataCalibragem($request['dataVencimento']);
        $this->setDadosUtimaCalibragem($request['dadosUtimaCalibragem']);
        $this->setMedia($request['media']);
        $this->setDispersao($request['dispersao']);
        $this->setObservacao($request['observacao']);
        $this->setQtdDiasVencimento($request['quantidadeDiasVencimento']);
        $this->setVeiculo($request['codigoVeiculo']);
        $this->setSetor($request['codigoSetor']);
    }

    public function transfereFormModel(){
        $objEquipamento = new Equipamento();

        $objEquipamento->setTacto($this->getTacto());
        $objEquipamento->setTipoFrequencia($this->getTipoFrequencia());
        $objEquipamento->setModelo($this->getModelo());
        $objEquipamento->setNumeroSerie($this->getNumeroSerie());
        $objEquipamento->setDataVencimento($this->getDataVencimento());
        $objEquipamento->setTorque($this->getTorque());
        $objEquipamento->setDescricaoOperacao($this->getDescricaoOperacao());
        $objEquipamento->setDataCalibragem($this->getDataCalibragem());
        $objEquipamento->setDadosUtimaCalibragem($this->getDadosUtimaCalibragem());
        $objEquipamento->setMedia($this->getMedia());
        $objEquipamento->setDispersao($this->getDispersao());
        $objEquipamento->setObservacao($this->getObservacao());
        $objEquipamento->setQtdDiasVencimento($this->getQtdDiasVencimento());
        
        $objEquipamento->setObjStatus(new TabelaBasica());
        $objEquipamento->getObjStatus()->setCodigo($this->getStatus());
        $objEquipamento->setObjColaborador(new Colaborador());
        $objEquipamento->getObjColaborador()->setCodigo($this->getColaborador());
        $objEquipamento->setObjSetor(new Setor());
        $objEquipamento->getObjSetor()->setCodigo($this->getSetor());
        $objEquipamento->setObjVeiculo(new Veiculo());
        $objEquipamento->getObjVeiculo()->setCodigo($this->getVeiculo());

        return $objEquipamento;
    }
 
  

}