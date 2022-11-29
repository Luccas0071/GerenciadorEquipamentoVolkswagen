<?php
include_once '../classes/model/Relatorio.php';

class  RelatorioForm {

    private $acao;
    private $codigo;
    private $nome;
    private $dataInclusao;
    private $veiculo;
    private $setor;
    private $dataInicio;
    private $dataFinal;

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
 
    public function transfereRequestForm($request){

        $this->setAcao($request['acao']);
        $this->setCodigo($request['codigoRelatorio']);
        $this->setNome($request['nome']);
        $this->setDataInclusao($request['dataInclusao']);
        $this->setVeiculo($request['veiculo']);
        $this->setSetor($request['setor']);
        $this->setDataInicio($request['dataInicio']);
        $this->setDataFinal($request['dataFinal']);

    }

    public function transfereFormModel(){

        $objRelatorio = new Relatorio();

        $objRelatorio->setCodigo($this->getCodigo());
        $objRelatorio->setNome($this->getNome());
        $objRelatorio->setDataInclusao($this->getDataInclusao());
        $objRelatorio->setDataInicio($this->getDataInicio());
        $objRelatorio->setDataFinal($this->getDataFinal());

        $objRelatorio->setObjVeiculo(new Veiculo());
        $objRelatorio->getObjVeiculo()->setCodigo($this->getVeiculo());
        $objRelatorio->setObjSetor(new Setor());
        $objRelatorio->getObjSetor()->setCodigo($this->getSetor());

        return $objRelatorio;
    }
    
}