<?php
include_once '../classes/form/ArquivoForm.php';
include_once '../classes/dao/ArquivoDAO.php';

class ArquivoAction
{
    public function mostrarArquivo($request){

        $smarty             = new Smarty();
        $objArquivoForm     = new ArquivoForm();
        $objArquivoFacade   = new ArquivoFacade();

        try {
            $objArquivoForm->transformaArquivoObj($request);
            $objArquivo = $objArquivoForm->transfereFormModel();

            $objArquivoFacade->incluirArquivo($objArquivo);

            $mensagem = "Incluido com sucesso !";
        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("CourseAction->star " . $e);
        }
        return $mensagem;
	}

    public function inicio(){

        $smarty             = new Smarty();
        $objArquivoForm     = new ArquivoForm();
        $objArquivoFacade   = new ArquivoFacade();

        try {
            $collectionPlanilha = $objArquivoFacade->listarPlanilhas();
            $smarty->assign("collectionPlanilha", $collectionPlanilha);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("CourseAction->star " . $e);
        }

        $smarty->display('templates/arquivo/pesquisarPlanilha.html');

        return true;
	}

}