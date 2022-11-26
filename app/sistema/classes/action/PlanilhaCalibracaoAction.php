<?php
include_once '../classes/form/PlanilhaCalibracaoForm.php';
include_once '../classes/dao/PlanilhaCalibracaoDAO.php';

class PlanilhaCalibracaoAction
{
    // public function mostrarArquivo($request){

    //     $smarty                         = new Smarty();
    //     $objPlanilhaCalibracaoForm      = new PlanilhaCalibracaoForm();
    //     $objPlanilhaCalibracaoFacade    = new PlanilhaCalibracaoFacade();

    //     try {
    //         $objPlanilhaCalibracaoForm->transformaArquivoObj($request);
    //         $objArquivo = $objPlanilhaCalibracaoForm->transfereFormModel();

    //         $objPlanilhaCalibracaoFacade->incluirArquivo($objArquivo);

    //         $mensagem = "Incluido com sucesso !";
    //     } catch (Exception $e) {
    //         $mensagem = $e;
    //         throw new Exception("CourseAction->star " . $e);
    //     }
    //     return $mensagem;
	// }

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

}