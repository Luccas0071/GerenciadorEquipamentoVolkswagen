<?php
include_once '../classes/form/inicioForm.php';
include_once '../classes/dao/inicioDAO.php';

class InicioAction
{
    public function start(){

        $objInicioFacade    = new InicioFacade();
        $objVeiculoFacade   = new VeiculoFacade();
        $objEquipamentoFacade   = new EquipamentoFacade();
        $smarty             = new Smarty();

        try {
            $collectionVeiculo = $objVeiculoFacade->listarVeiculo();
            $smarty->assign("collectionVeiculo", $collectionVeiculo);

            $collectionEquipamento = $objEquipamentoFacade->listarEquipamento();
            $smarty->assign("collectionEquipamento", $collectionEquipamento);
            
            // $collectionPlanilha = $objInicioFacade->listarDadosPlanilha();
            $collectionPlanilha = "";
            $smarty->assign("collectionPlanilha", $collectionPlanilha);

            $smarty->assign("objArquivo", "Batara");
        } catch (Exception $e) {
            throw new Exception("CourseAction->star " . $e);
        }

        $smarty->display('templates/home.html');
	}

    public function editar(){
	
	}

    public function incluir(){

	}

    public function alterar(){
	
	}

    public function excluir(){
	
	}

}

   