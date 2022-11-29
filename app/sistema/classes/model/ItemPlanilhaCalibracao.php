<?php

class ItemPlanilhaCalibracao{
    
    private $codigo;
    private $location;
    private $description;
    private $folder;
    private $testType;
    private $measure;
    private $nextCheck;
    private $observacao;
    
    private $objPlanilhaCalibracao;
    
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

    public function getObjPlanilhaCalibracao()
    {
        return $this->objPlanilhaCalibracao;
    }

    public function setObjPlanilhaCalibracao($objPlanilhaCalibracao)
    {
        $this->objPlanilhaCalibracao = $objPlanilhaCalibracao;

        return $this;
    }

    public function transfereCollectionItemPlanilhaCalibracaoObjArray($collectionItemPlanilhaCalibracao)
    {
        $arrayItemPlanilhaCalibracao = array();
        $indice = 0;
        foreach ($collectionItemPlanilhaCalibracao as $objItemPlanilhaCalibracao) {

            $arrayItemPlanilhaCalibracao[$indice]['codigo_item_planilha_calibracao']   = $objItemPlanilhaCalibracao->getCodigo();
            $arrayItemPlanilhaCalibracao[$indice]['location']                          = $objItemPlanilhaCalibracao->getLocation();
            $arrayItemPlanilhaCalibracao[$indice]['description']                       = $objItemPlanilhaCalibracao->getDescription();
            $arrayItemPlanilhaCalibracao[$indice]['folder']                            = $objItemPlanilhaCalibracao->getFolder();
            $arrayItemPlanilhaCalibracao[$indice]['test_type']                         = $objItemPlanilhaCalibracao->getTestType();
            $arrayItemPlanilhaCalibracao[$indice]['measure']                           = $objItemPlanilhaCalibracao->getMeasure();
            $arrayItemPlanilhaCalibracao[$indice]['next_check']                        = $objItemPlanilhaCalibracao->getNextCheck();
            $arrayItemPlanilhaCalibracao[$indice]['observacao']                        = $objItemPlanilhaCalibracao->getObservacao();
            $arrayItemPlanilhaCalibracao[$indice]['codigo_planilha_calibracao']        = $objItemPlanilhaCalibracao->getObjPlanilhaCalibracao()->getCodigo();

            $indice++;
        }
        return $arrayItemPlanilhaCalibracao;
    }


}