<?php
include_once '../classes/form/inicioForm.php';
include_once '../classes/dao/inicioDAO.php';

class InicioAction
{
    public function inicio($get){

        $smarty                 = new Smarty();
        $objInicioFacade        = new InicioFacade();
        $objVeiculoFacade       = new VeiculoFacade();
        $objEquipamentoFacade   = new EquipamentoFacade();
        $objVeiculoForm         = new VeiculoForm();

        $codigoVeiculo = $get['codigoVeiculo'];
        
        try {
            $collectionVeiculo = $objVeiculoFacade->listarVeiculo();
            $smarty->assign("collectionVeiculo", $collectionVeiculo);

            $objPagina = $objEquipamentoFacade->listarEquipamentoPorVeiculo($codigoVeiculo);

            $arrayQtd = $objEquipamentoFacade->listarQtdEquipamentoPorSituacao($codigoVeiculo);

        } catch (Exception $e) {
            throw new Exception("InicioAction->star " . $e);
        }

        $objVeiculoForm->setCodigo($codigoVeiculo);

        $smarty->assign("qtdEmCalibracao",      $arrayQtd['qtdEmCalibracao']);
        $smarty->assign("qtdCalibrado",         $arrayQtd['qtdCalibrado']);
        $smarty->assign("qtdNaoEncontrado",     $arrayQtd['qtdNaoEncontrado']);

        $smarty->assign("objPagina", $objPagina);
        $smarty->assign("objVeiculoForm", $objVeiculoForm);

        $smarty->display('templates/home.html');
	}

    public function editar(){
        $smarty                 = new Smarty();
        $smarty->display('templates/home.html');
	}

    public function incluir(){

	}

    public function alterar(){
	
	}

    public function excluir(){
	
	}

}

   