<?php
include_once '../classes/form/ColaboradorForm.php';
include_once '../classes/dao/ColaboradorDAO.php';

class ColaboradorAction
{
    public function inicio(){

        $smarty             = new Smarty();
        $objColaboradorForm     = new ColaboradorForm();
        $objColaboradorFacade   = new ColaboradorFacade();

        try {
            $collectionColaborador = $objColaboradorFacade->listarColaborador();
            $smarty->assign("collectionColaborador", $collectionColaborador);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("ColaboradorAction->inicio " . $e);
        }

        $smarty->display('templates/colaborador/pesquisarColaborador.html');

        return true;
	}
    
    public function editar($get){

        $smarty             = new Smarty();
        $objColaboradorForm     = new ColaboradorForm();
        $objColaboradorFacade   = new ColaboradorFacade();

        $acao = $get['acao'];

        try {
            // $collectionColaborador = $objColaboradorFacade->listarColaborador();
            // $smarty->assign("collectionColaborador", $collectionColaborador);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("ColaboradorAction->inicio " . $e);
        }

  

        $objColaboradorForm->setAcao($acao);

        $smarty->assign("objColaboradorForm", $objColaboradorForm);

        if($acao == "I"){
            $smarty->display('templates/colaborador/editarColaborador.html');
        }
        return true;
    }

    public function incluir($request){

        $smarty             = new Smarty();
        $objColaboradorForm     = new ColaboradorForm();
        $objColaboradorFacade   = new ColaboradorFacade();

        try {
            $objColaboradorForm->transfereRequestForm($request);
            $objColaborador = $objColaboradorForm->transfereFormModel();

            $objColaboradorFacade->incluirColaborador($objColaborador);
           
        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("ColaboradorAction->inicio " . $e);
        }

        return true;
    }

}