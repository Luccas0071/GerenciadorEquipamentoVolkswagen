<?php
include_once '../classes/form/VeiculoForm.php';
include_once '../classes/dao/VeiculoDAO.php';

class VeiculoAction
{
    public function inicio(){
        $smarty             = new Smarty();
        $objVeiculoForm     = new VeiculoForm();
        $objVeiculoFacade   = new VeiculoFacade();

        try {
            $collectionVeiculo = $objVeiculoFacade->listarVeiculo();
            $smarty->assign("collectionVeiculo", $collectionVeiculo);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("VeiculoAction->inicio " . $e);
        }
        $smarty->display('templates/veiculo/pesquisarVeiculo.html');
	}
    
    public function editar($get){

        $smarty             = new Smarty();
        $objVeiculoForm     = new VeiculoForm();
        $objVeiculoFacade   = new VeiculoFacade();

        $acao = $get['acao'];

        try {
            if($acao != "I"){
                $codigoVeiculo = $get['codigoVeiculo'];
                $objVeiculo = $objVeiculoFacade->obterVeiculo($codigoVeiculo);
                $objVeiculoForm->transfereModelForm($objVeiculo);
            }
        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("VeiculoAction->editar " . $e);
        }

  

        $objVeiculoForm->setAcao($acao);

        $smarty->assign("objVeiculoForm", $objVeiculoForm);

        if($acao == "I" || $acao == "A"){
            $smarty->display('templates/veiculo/editarVeiculo.html');
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

    public function alterar($request){

        $smarty             = new Smarty();
        $objVeiculoForm     = new VeiculoForm();
        $objVeiculoFacade   = new VeiculoFacade();

        try {
            $objVeiculoForm->transfereRequestForm($request);
            $objVeiculo = $objVeiculoForm->transfereFormModel();

            $objVeiculoFacade->alterarVeiculo($objVeiculo);
           
        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("VeiculoAction->alterar " . $e);
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