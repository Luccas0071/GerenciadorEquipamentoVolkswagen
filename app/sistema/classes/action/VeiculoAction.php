<?php
include_once '../classes/form/VeiculoForm.php';
include_once '../classes/dao/VeiculoDAO.php';

class VeiculoAction
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
        $objVeiculoForm     = new VeiculoForm();
        $objVeiculoFacade   = new VeiculoFacade();

        try {
            $objVeiculoForm->transfereRequestForm($request);
            $objVeiculo = $objVeiculoForm->transfereFormModel();

            $objVeiculoFacade->incluirVeiculo($objVeiculo);
           
        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("VeiculoAction->inicio " . $e);
        }

        return true;
    }

}