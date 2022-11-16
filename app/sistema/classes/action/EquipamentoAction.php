<?php
include_once '../classes/form/EquipamentoForm.php';
include_once '../classes/dao/EquipamentoDAO.php';
include_once '../classes/facade/ComboFacade.php';

class EquipamentoAction
{
    public function inicio(){
        $smarty             = new Smarty();
        $objEquipamentoForm     = new EquipamentoForm();
        $objEquipamentoFacade   = new EquipamentoFacade();

        try {
            $collectionEquipamento = $objEquipamentoFacade->listarEquipamento();
            $smarty->assign("collectionEquipamento", $collectionEquipamento);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("EquipamentoAction->inicio " . $e);
        }

        $smarty->display('templates/equipamento/pesquisarEquipamento.html');

        return true;
	}
    
    public function editar($get){

        $smarty                 = new Smarty();
        $objEquipamentoForm     = new EquipamentoForm();
        $objVeiculoFacade       = new VeiculoFacade();
        $objSetorFacade         = new SetorFacade();
        $objColaboradorFacade   = new ColaboradorFacade();
        $objCombosFacade        = new ComboFacade();

        $acao = $get['acao'];

        try {
            $collectionColaborador = $objColaboradorFacade->listarColaborador();
            $smarty->assign("collectionColaborador", $collectionColaborador);

            $collectionStatus = $objCombosFacade->listarTabelaBasica('1');
            $smarty->assign("collectionStatus", $collectionStatus);

            $collectionVeiculo = $objVeiculoFacade->listarVeiculo();
            $smarty->assign("collectionVeiculo", $collectionVeiculo);

            $collectionSetor = $objSetorFacade->listarSetor();
            $smarty->assign("collectionSetor", $collectionSetor);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("EquipamentoAction->inicio " . $e);
        }

        $objEquipamentoForm->setAcao($acao);

        $smarty->assign("objEquipamentoForm", $objEquipamentoForm);

        if($acao == "I"){
            $smarty->display('templates/equipamento/editarEquipamento.html');
        }
        return true;
    }

    public function incluir($request){

        $smarty             = new Smarty();
        $objEquipamentoForm     = new EquipamentoForm();
        $objEquipamentoFacade   = new EquipamentoFacade();

        try {
            $objEquipamentoForm->transfereRequestForm($request);
            $objEquipamento = $objEquipamentoForm->transfereFormModel();

            $objEquipamentoFacade->incluirEquipamento($objEquipamento);
           
        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("EquipamentoAction->incluir " . $e);
        }

        return true;
    }

}