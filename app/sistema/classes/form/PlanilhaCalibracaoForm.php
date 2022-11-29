<?php
include_once '../classes/model/PlanilhaCalibracao.php';
include_once '../classes/model/ItemPlanilhaCalibracao.php';
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

        $collectionItemPlanilhaCalibracao = [];
        foreach ($arrayLinhas as $linha){
            $objItemPlanilhaCalibracao = new ItemPlanilhaCalibracao();

            $objItemPlanilhaCalibracao->setLocation($linha[0]);
            $objItemPlanilhaCalibracao->setDescription($linha[1]);
            $objItemPlanilhaCalibracao->setFolder($linha[2]);
            $objItemPlanilhaCalibracao->setTestType($linha[3]);
            $objItemPlanilhaCalibracao->setMeasure($linha[4]);
            $objItemPlanilhaCalibracao->setNextCheck($linha[5]);
            $objItemPlanilhaCalibracao->setObservacao($linha[6]);

            array_push($collectionItemPlanilhaCalibracao, $objItemPlanilhaCalibracao);
        }
        $this->setCollectionDadosArquivo($collectionItemPlanilhaCalibracao);
    }

    public function transfereFormModel(){

        $objPlanilhaCalibracao = new PlanilhaCalibracao();

        $objPlanilhaCalibracao->setCodigo($this->getCodigo());
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

    public function transfereRequestForm($request){

        $this->setCodigo($request['codigoPlanilhaCalibracao']);
        $this->setNome($request['nome']);
        $this->setDataInclusao($request['dataInclusao']);

    }


}