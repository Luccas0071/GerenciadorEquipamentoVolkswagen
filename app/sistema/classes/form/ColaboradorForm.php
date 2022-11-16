<?php
include_once '../classes/model/Colaborador.php';

class  ColaboradorForm {

    private $acao;
    private $codigo;
    private $nome;
    private $funcao;
    private $dataAdmissao;

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
 
    public function getFuncao()
    {
        return $this->funcao;
    }

    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;

        return $this;
    }
 
    public function getDataAdmissao()
    {
        return $this->dataAdmissao;
    }

    public function setDataAdmissao($dataAdmissao)
    {
        $this->dataAdmissao = $dataAdmissao;

        return $this;
    }
 
    public function transfereRequestForm($request){

        $this->setCodigo($request['codigoColaborador']);
        $this->setNome($request['nome']);
        $this->setFuncao($request['cargo']);
        $this->setDataAdmissao($request['dataAdmissao']);

    }

    public function transfereFormModel(){

        $objColaborador = new Colaborador();
        $objColaborador->setNome($this->getNome());
        $objColaborador->setFuncao($this->getFuncao());
        $objColaborador->setDataAdmissao($this->getDataAdmissao());

        return $objColaborador;
    }



 
   
}