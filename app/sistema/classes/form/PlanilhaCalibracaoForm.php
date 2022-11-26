<?php
include_once '../classes/model/PlanilhaCalibracao.php';
include_once '../classes/model/ItemArquivo.php';
require '../../../vendor/autoload.php';

class  PlanilhaCalibracaoForm {

    private $acao;
    private $codigo;
    private $nome;
    private $dataInclusao;
    private $collectionDadosArquivo;

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
 
    public function getCollectionDadosArquivo()
    {
        return $this->collectionDadosArquivo;
    }

    public function setCollectionDadosArquivo($collectionDadosArquivo)
    {
        $this->collectionDadosArquivo = $collectionDadosArquivo;

        return $this;
    }

    public function transformaArquivoObj($request){

        $this->setNome($_FILES['arquivo']['name']);
    
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load($_FILES['arquivo']['tmp_name']);

        $sheet = $spreadsheet->getActiveSheet();

        $arrayLinhas = array();
        foreach ($sheet->getRowIterator(2) as $row) {
            $cellInterator = $row->getCellIterator();
            $cellInterator->setIterateOnlyExistingCells(false);
            
            $arrayLinha = array();
            foreach ($cellInterator as $cell) {
                $valorCelula = $cell->getCalculatedValue();
                array_push($arrayLinha, $valorCelula);
            }
            array_push($arrayLinhas, $arrayLinha);
        }

        $collectionItemArquivo = [];
        foreach ($arrayLinhas as $linha){
            $objItemArquivo = new ItemArquivo();

            $objItemArquivo->setLocation($linha[0]);
            $objItemArquivo->setDescription($linha[1]);
            $objItemArquivo->setFolder($linha[2]);
            $objItemArquivo->setTestType($linha[3]);
            $objItemArquivo->setMeasure($linha[4]);
            $objItemArquivo->setNextCheck($linha[5]);
            $objItemArquivo->setObservacao($linha[6]);

            array_push($collectionItemArquivo, $objItemArquivo);
        }
        $this->setCollectionDadosArquivo($collectionItemArquivo);
    }

    public function transfereFormModel(){

        $objPlanilhaCalibracao = new PlanilhaCalibracao();

        $objPlanilhaCalibracao->setNome($this->getNome());
        $objPlanilhaCalibracao->setCollectionItemPlanilhaCalibracao($this->getCollectionDadosArquivo());
      
        return $objPlanilhaCalibracao;
    }

    public function transfereModelForm($objPlanilhaCalibracao)
    {
        $this->setCodigo($objPlanilhaCalibracao->getCodigo());
        $this->setNome($objPlanilhaCalibracao->getNome());
        $this->setDataInclusao($objPlanilhaCalibracao->getDataInclusao());
    }




}