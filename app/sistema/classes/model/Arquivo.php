<?php

class Arquivo{
    
    private $codigo;
    private $nome;
    private $dataInclusao;
    private $collectionDadosArquivo;

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
 
    public function getCollectionDadosArquivo()
    {
        return $this->collectionDadosArquivo;
    }

    public function setCollectionDadosArquivo($collectionDadosArquivo)
    {
        $this->collectionDadosArquivo = $collectionDadosArquivo;

        return $this;
    }


}