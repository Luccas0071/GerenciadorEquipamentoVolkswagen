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

            if($acao != "I"){
                $codigoSetor = $get['codigoSetor'];
                $objSetor = $objSetorFacade->obterSetor($codigoSetor);
                $objSetorForm->transfereModelForm($objSetor);
            }

            $collectionVeiculo = $objVeiculoFacade->listarVeiculo();
            $smarty->assign("collectionVeiculo", $collectionVeiculo);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("SetorAction->inicio " . $e);
        }

        $objSetorForm->setAcao($acao);

        $smarty->assign("objSetorForm", $objSetorForm);

        if($acao == "I" || $acao == "A"){
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

    public function alterar($request){

        $smarty           = new Smarty();
        $objSetorForm     = new SetorForm();
        $objSetorFacade   = new SetorFacade();

        try {
            $objSetorForm->transfereRequestForm($request);
            $objSetor = $objSetorForm->transfereFormModel();

            $objSetorFacade->alterarSetor($objSetor);
           
        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("SetorAction->alterar " . $e);
        }
        return true;
    }

    public function excluir($get){

        $smarty             = new Smarty();
        $objVeiculoFacade   = new VeiculoFacade();
     
        $codigoVeiculo = $get['codigoVeiculo'];

        try {

            $objVeiculoFacade->excluirVeiculo($codigoVeiculo);
           
        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("VeiculoAction->excluir " . $e);
        }

        return true;
    }


}