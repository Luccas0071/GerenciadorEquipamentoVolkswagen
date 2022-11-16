<?php

class TabelaBasica{
    
    private $codigo;
    private $descricao;
    private $tipoTabela;

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getTipoTabela()
    {
        return $this->tipoTabela;
    }

    public function setTipoTabela($tipoTabela)
    {
        $this->tipoTabela = $tipoTabela;

        return $this;
    }
}