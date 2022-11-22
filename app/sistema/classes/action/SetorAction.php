<?php
include_once '../classes/form/SetorForm.php';
include_once '../classes/dao/SetorDAO.php';

class SetorAction
{
    public function inicio(){

        $smarty           = new Smarty();
        $objSetorForm     = new SetorForm();
        $objSetorFacade   = new SetorFacade();

        try {
            $collectionSetor = $objSetorFacade->listarSetor();
            $smarty->assign("collectionSetor", $collectionSetor);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("SetorAction->inicio " . $e);
        }

        $smarty->display('templates/setor/pesquisarSetor.html');

        return true;
	}
    
    public function editar($get){

        $smarty             = new Smarty();
        $objSetorForm       = new SetorForm();
        $objSetorFacade     = new SetorFacade();
        $objVeiculoFacade   = new VeiculoFacade();

        $acao = $get['acao'];

        try {
            $collectionVeiculo = $objVeiculoFacade->listarVeiculo();
            $smarty->assign("collectionVeiculo", $collectionVeiculo);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("SetorAction->inicio " . $e);
        }

        $objSetorForm->setAcao($acao);

        $smarty->assign("objSetorForm", $objSetorForm);

        if($acao == "I"){
            $smarty->display('templates/setor/editarSetor.html');
        }
        return true;
    }

    public function incluir($request){

        $smarty             = new Smarty();
        $objSetorForm     = new SetorForm();
        $objSetorFacade   = new SetorFacade();

        try {
            $objSetorForm->transfereRequestForm($request);
            $objSetor = $objSetorForm->transfereFormModel();

            $objSetorFacade->incluirSetor($objSetor);
           
        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("ColaboradorAction->inicio " . $e);
        }

        return true;
    }

}