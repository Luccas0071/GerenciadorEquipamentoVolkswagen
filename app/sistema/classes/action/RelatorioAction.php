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

    public function editar($get){

        $smarty                 = new Smarty();
        $objRelatorioForm     = new RelatorioForm();
        $objRelatorioFacade   = new RelatorioFacade();
        $objEquipamentoForm     = new EquipamentoForm();
        $objVeiculoFacade       = new VeiculoFacade();
        $objSetorFacade         = new SetorFacade();
        $objColaboradorFacade   = new ColaboradorFacade();
        $objCombosFacade        = new ComboFacade();
        $objPagina              = new Pagina();

        $acao = $get['acao'];
    
        try {

            
            $collectionVeiculo = $objVeiculoFacade->listarVeiculo();
            $smarty->assign("collectionVeiculo", $collectionVeiculo);

            $collectionSetor = $objSetorFacade->listarSetor();
            $smarty->assign("collectionSetor", $collectionSetor);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("RelatorioAction->inicio " . $e);
        }

        $objRelatorioForm->setAcao($acao);

        $objPagina->setQtdTotalRegistro(0);

        $smarty->assign("objPagina", $objPagina);
        $smarty->assign("objRelatorioForm", $objRelatorioForm);
        $smarty->assign("objRelatorioForm", $objRelatorioForm);

        if($acao == "I" || $acao == "A"){
            $smarty->display('templates/relatorio/editarRelatorio.html');
        }
        return true;
    }
    
    public function gerarRelatorio($GET){

        $smarty                 = new Smarty();
        $objRelatorioFacade   = new RelatorioFacade();

        $veiculo = $GET['veiculo'];
        $setor = $GET['setor'];
        $dataInicio = $GET['dataInicio'];
        $dataFinal = $GET['dataFinal'];

        try {
            $objPagina = $objRelatorioFacade->pesquisarEquipamento($veiculo, $setor, $dataInicio, $dataFinal);

            $objRelatorioFacade->gerarRelatorio($objPagina);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("RelatorioAction->gerarRelatorio " . $e);
        }
        return true;
	}

    public function pesquisarEquipamento($GET){

        $smarty                 = new Smarty();
        $objRelatorioFacade     = new RelatorioFacade();
        $objRelatorioForm       = new RelatorioForm();
        $objVeiculoFacade       = new VeiculoFacade();
        $objSetorFacade         = new SetorFacade();
        

        $veiculo = $GET['veiculo'];
        $setor = $GET['setor'];
        $dataInicio = $GET['dataInicio'];
        $dataFinal = $GET['dataFinal'];
     
        try {
            $collectionVeiculo = $objVeiculoFacade->listarVeiculo();
            $smarty->assign("collectionVeiculo", $collectionVeiculo);

            $collectionSetor = $objSetorFacade->listarSetor();
            $smarty->assign("collectionSetor", $collectionSetor);

            $objPagina = $objRelatorioFacade->pesquisarEquipamento($veiculo, $setor, $dataInicio, $dataFinal);

        } catch (Exception $e) {
            $mensagem = $e;
            throw new Exception("RelatorioAction->gerarRelatorio " . $e);
        }

        $objRelatorioForm->setVeiculo($veiculo);
        $objRelatorioForm->setSetor($setor);
        $objRelatorioForm->setDataInicio($dataInicio);
        $objRelatorioForm->setDataFinal($dataFinal);

        $smarty->assign("objPagina", $objPagina);
        $smarty->assign("objRelatorioForm", $objRelatorioForm);

        $smarty->display('templates/relatorio/editarRelatorio.html');
        return true;
	}

}