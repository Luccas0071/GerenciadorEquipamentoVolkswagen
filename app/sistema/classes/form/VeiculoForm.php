<?php
include_once '../classes/model/Veiculo.php';

class  VeiculoForm {

    private $acao;
    private $codigo;
    private $nome;
    private $dataInclusao;

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

    public function transfereRequestForm($request){

        $this->setCodigo($request['codigoVeiculo']);
        $this->setNome($request['nomeVeiculo']);
        $this->setDataInclusao($request['dataVeiculo']);

    }

    public function transfereFormModel(){

        $objVeiculo = new Veiculo();
        $objVeiculo->setCodigo($this->getCodigo());
        $objVeiculo->setNome($this->getNome());
        $objVeiculo->setDataInclusao($this->getDataInclusao());

        return $objVeiculo;
    }



 
   
}