<?php

class Pagina{
    
    private $qtdTotalRegistro;
    private $registros;

    public function getQtdTotalRegistro()
    {
        return $this->qtdTotalRegistro;
    }
    
    public function setQtdTotalRegistro($qtdTotalRegistro)
    {
        $this->qtdTotalRegistro = $qtdTotalRegistro;

        return $this;
    } 

    public function getRegistros()
    {
        return $this->registros;
    }
    
    public function setRegistros($registros)
    {
        $this->registros = $registros;

        return $this;
    }
}