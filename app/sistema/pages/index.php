<?php
session_start();

include_once 'configs/Config.php';
include_once '../classes/action/LoginAction.php';
include_once '../classes/action/UserAction.php';
include_once '../classes/action/InicioAction.php';
include_once '../classes/action/ArquivoAction.php'; //ok
include_once '../classes/action/ColaboradorAction.php'; //ok
include_once '../classes/action/EquipamentoAction.php'; //ok
include_once '../classes/action/RelatorioAction.php'; //ok
include_once '../classes/action/VeiculoAction.php'; //ok
include_once '../classes/action/SetorAction.php'; //ok
include_once '../classes/action/MainAction.php';


if(!isset($_GET['do']) && !isset($_GET['action'])){
    header('Location: index.php?do=login&action=start');
}

   
$do = $_GET['do'];
$action = $_GET['action'];


/*Login*/
if($do == "login"){
    $loginAction = new LoginAction();
    if($action == "start"){
        $loginAction->start();
    }
    if($action == "logar"){
        $loginAction->logar($_POST);
    }
    if($action == "logoff"){
        $loginAction->logoff();
    }

} 

if($_SESSION['USUARIO']['NOME'] != ""){
    
    // MainAction::header();

    /*Inicio*/
    if($do == "index"){

        $inicioAction = new InicioAction();
        $arquivoAction = new ArquivoAction();

        if($action == "inicio"){
            $inicioAction->inicio($_GET);
        }

        if($action == "mostrarArquivo"){
            $arquivoAction->mostrarArquivo($_POST);
        }
    } 

    /*planilha*/
    if($do == "planilha"){
        $arquivoAction = new ArquivoAction();

        if($action == "inicio"){
            $arquivoAction->inicio();
        }
    } 

    /*Colaborador*/
    if($do == "colaborador"){
        $ColaboradorAction = new ColaboradorAction();

        if($action == "inicio"){
            $ColaboradorAction->inicio();
        }

        if($action == "editar"){
            $ColaboradorAction->editar($_GET);
        }

        if($action == "incluir"){
            $ColaboradorAction->incluir($_POST);
        }
    } 

    /*Equipamento*/
    if($do == "equipamento"){
        $EquipamentoAction = new EquipamentoAction();

        if($action == "inicio"){
            $EquipamentoAction->inicio();
        }

        if($action == "editar"){
            $EquipamentoAction->editar($_GET);
        }

        if($action == "incluir"){
            $EquipamentoAction->incluir($_POST);
        }

        if($action == "alterar"){
            $EquipamentoAction->alterar($_POST);
        }

        if($action == "excluir"){
            $EquipamentoAction->excluir($_GET);
        }
    } 

    /*Veiculo*/
    if($do == "veiculo"){
        $VeiculoAction = new VeiculoAction();

        if($action == "inicio"){
            $VeiculoAction->inicio();
        }

        if($action == "editar"){
            $VeiculoAction->editar($_GET);
        }

        if($action == "incluir"){
            $VeiculoAction->incluir($_POST);
        }

        // if($action == "alterar"){
        //     $VeiculoAction->alterar($_POST);
        // }

        if($action == "excluir"){
            $VeiculoAction->excluir($_GET);
        }
    } 

    /*Setores*/
    if($do == "setor"){
        $SetorAction = new SetorAction();

        if($action == "inicio"){
            $SetorAction->inicio();
        }

        if($action == "editar"){
            $SetorAction->editar($_GET);
        }

        if($action == "incluir"){
            $SetorAction->incluir($_POST);
        }

        // if($action == "alterar"){
        //     $SetorAction->alterar($_POST);
        // }

        // if($action == "excluir"){
        //     $SetorAction->excluir($_GET);
        // }
    } 

    /*Relatorio*/
    if($do == "relatorio"){
        $RelatorioAction = new RelatorioAction();

        if($action == "inicio"){
            $RelatorioAction->inicio();
        }
        if($action == "gerarRelatorio"){
            $RelatorioAction->gerarRelatorio();
        }
    } 

    // MainAction::footer();
}

