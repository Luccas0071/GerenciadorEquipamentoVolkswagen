<?php

class ItemArquivo{
    
    private $codigo;
    private $location;
    private $description;
    private $folder;
    private $testType;
    private $measure;
    private $nextCheck;
    private $observacao;
    
    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }
 
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
 
    public function getFolder()
    {
        return $this->folder;
    }

    public function setFolder($folder)
    {
        $this->folder = $folder;

        return $this;
    }
 
    public function getTestType()
    {
        return $this->testType;
    }

    public function setTestType($testType)
    {
        $this->testType = $testType;

        return $this;
    }
 
    public function getMeasure()
    {
        return $this->measure;
    }

    public function setMeasure($measure)
    {
        $this->measure = $measure;

        return $this;
    }
 
    public function getNextCheck()
    {
        return $this->nextCheck;
    }

    public function setNextCheck($nextCheck)
    {
        $this->nextCheck = $nextCheck;

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

    public function getObservacao()
    {
        return $this->observacao;
    }

    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }
}