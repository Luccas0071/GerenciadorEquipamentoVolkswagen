<?php
include_once '../classes/form/RelatorioForm.php';
include_once '../classes/dao/RelatorioDAO.php';

class RelatorioAction
{
    public function inicio(){

        $smarty                 = new Smarty();
        // $objColaboradorForm     = new ColaboradorForm();
        $objEquipamentoFacade   = new EquipamentoFacade();

        try {
            $collectionEquipamento = $objEquipamentoFacade->listarEquipamento();
            $smarty->assign("collectionEquipamento", $collectionEquipamento);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("RelatorioAction->inicio " . $e);
        }

        $smarty->display('templates/relatorio/pesquisarRelatorio.html');

        return true;
	}
    
    public function gerarRelatorio(){

        $smarty                 = new Smarty();
        $objRelatorioFacade   = new RelatorioFacade();

        try {
            $objRelatorioFacade->gerarRelatorio();

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("RelatorioAction->gerarRelatorio " . $e);
        }
        return true;
	}

}