<?php
include_once '../classes/form/PlanilhaCalibracaoForm.php';
include_once '../classes/dao/PlanilhaCalibracaoDAO.php';

class PlanilhaCalibracaoAction
{

    public function incluirPlanilha($request){

        $smarty                         = new Smarty();
        $objPlanilhaCalibracaoForm      = new PlanilhaCalibracaoForm();
        $objPlanilhaCalibracaoFacade    = new PlanilhaCalibracaoFacade();

        try {
            $objPlanilhaCalibracaoForm->transformaArquivoObj($request);
            $objPlanilhaCalibracao = $objPlanilhaCalibracaoForm->transfereFormModel();

            $objPlanilhaCalibracaoFacade->incluirPlanilhaCalibracao($objPlanilhaCalibracao);

            $mensagem = "Incluido com sucesso !";
        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("CourseAction->star " . $e);
        }
        return $mensagem;
	}

    public function inicio(){

        $smarty                        = new Smarty();
        $objPlanilhaCalibracaoForm     = new PlanilhaCalibracaoForm();
        $objPlanilhaCalibracaoFacade   = new PlanilhaCalibracaoFacade();

        try {
            $collectionPlanilhaCalibracao = $objPlanilhaCalibracaoFacade->listarPlanilhaCalibracao();
            $smarty->assign("collectionPlanilhaCalibracao", $collectionPlanilhaCalibracao);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("CourseAction->star " . $e);
        }

        $smarty->display('templates/planilhaCalibracao/pesquisarPlanilhaCalibracao.html');

        return true;
	}

    public function editar($get){

        $smarty             = new Smarty();
        $objPlanilhaCalibracaoForm     = new PlanilhaCalibracaoForm();
        $objPlanilhaCalibracaoFacade   = new PlanilhaCalibracaoFacade();

        $acao = $get['acao'];

        try {
            if($acao != "I"){
                $codigoPlanilhaCalibracao = $get['codigoPlanilhaCalibracao'];
                $objPlanilhaCalibraca = $objPlanilhaCalibracaoFacade->obterPlanilhaCalibracao($codigoPlanilhaCalibracao);
                $objPlanilhaCalibracaoForm->transfereModelForm($objPlanilhaCalibraca);
            }

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("PlanilhaCalibracaoAction->inicio " . $e);
        }

        $objPlanilhaCalibracaoForm->setAcao($acao);

        $smarty->assign("objPlanilhaCalibracaoForm", $objPlanilhaCalibracaoForm);

        if($acao == "I" || $acao == "A"){
            $smarty->display('templates/planilhaCalibracao/editarPlanilhaCalibracao.html');
        }
        return true;
    }

    public function listarItemPlanilhaCalibracao($get)
    {
        $smarty                         = new Smarty();
        $objPlanilhaCalibracaoForm      = new PlanilhaCalibracaoForm();
        $objPlanilhaCalibracaoFacade    = new PlanilhaCalibracaoFacade();
        $objItemPlanilhaCalibracao      = new ItemPlanilhaCalibracao();

        $codigoPlanilhaCalibracao = $get['codigoPlanilhaCalibracao'];

        try {
            $collectionItemPlanilhaCalibracao = $objPlanilhaCalibracaoFacade->listarItemPlanilhaCalibracao($codigoPlanilhaCalibracao);
            $arrayItemPlanilhaCalibracao = $objItemPlanilhaCalibracao->transfereCollectionItemPlanilhaCalibracaoObjArray($collectionItemPlanilhaCalibracao);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("PlanilhaCalibracaoAction->inicio " . $e);
        }

        echo json_encode($arrayItemPlanilhaCalibracao);
        return true;
    }

    public function excluir($get){

        $smarty             = new Smarty();
        $objPlanilhaCalibracaoFacade   = new PlanilhaCalibracaoFacade();
     
        $codigoPlanilhaCalibracao = $get['codigoPlanilhaCalibracao'];

        try {
            $objPlanilhaCalibracaoFacade->excluirPlanilhaCalibracao($codigoPlanilhaCalibracao);
           
        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("PlanilhaCalibracaoAction->excluir " . $e);
        }

        return true;
    }

    public function alterar($request){

        $smarty                        = new Smarty();
        $objPlanilhaCalibracaoForm     = new PlanilhaCalibracaoForm();
        $objPlanilhaCalibracaoFacade   = new PlanilhaCalibracaoFacade();

        try {
            $objPlanilhaCalibracaoForm->transfereRequestForm($request);
            $objPlanilhaCalibracao = $objPlanilhaCalibracaoForm->transfereFormModel();

            $objPlanilhaCalibracaoFacade->alterarPlanilhaCalibracao($objPlanilhaCalibracao);
           
        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("PlanilhaCalibracaoAction->alterar " . $e);
        }

        return true;
    }

}