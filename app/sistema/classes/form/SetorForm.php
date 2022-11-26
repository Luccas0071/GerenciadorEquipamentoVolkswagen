<?php
include_once '../classes/model/Setor.php';

class  SetorForm {
    private $acao;
    private $codigo;
    private $nome;
    private $dataInclusao;
    private $codigoVeiculo;

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

    public function getCodigoVeiculo()
    {
        return $this->codigoVeiculo;
    }
 
    public function setCodigoVeiculo($codigoVeiculo)
    {
        $this->codigoVeiculo = $codigoVeiculo;

        return $this;
    }
  
    public function transfereRequestForm($request){
        $this->setCodigo($request['codigoSetor']);
        $this->setNome($request['nome']);
        $this->setDataInclusao($request['dataInclusaoSetor']);
        $this->setCodigoVeiculo($request['codigoVeiculo']);
    }

    public function transfereFormModel(){

        $objSetor = new Setor();
        $objSetor->setCodigo($this->getCodigo());
        $objSetor->setNome($this->getNome());
        $objSetor->setDataInclusao($this->getDataInclusao());
        $objSetor->setObjVeiculo(new Veiculo());
        $objSetor->getObjVeiculo()->setCodigo($this->getCodigoVeiculo());

        return $objSetor;
    }
 
    public function transfereModelForm($objSetor)
    {
        $this->setCodigo($objSetor->getCodigo());
        $this->setNome($objSetor->getNome());
        $this->setDataInclusao($objSetor->getDataInclusao());
        $this->setCodigoVeiculo($objSetor->getObjVeiculo()->getCodigo());
    }



}