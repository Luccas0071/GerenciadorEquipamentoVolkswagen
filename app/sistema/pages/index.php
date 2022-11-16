<?php
session_start();

include_once 'configs/Config.php';
include_once '../classes/action/CourseAction.php';
include_once '../classes/action/LoginAction.php';
include_once '../classes/action/UserAction.php';
include_once '../classes/action/ModuleAction.php';
include_once '../classes/action/ContentsAction.php';
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
            $inicioAction->start();
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
    } 

    /*Relatorio*/
    if($do == "relatorio"){
        $RelatorioAction = new RelatorioAction();

        if($action == "inicio"){
            $RelatorioAction->inicio();
        }

     
    } 

    /*Veiculo*/
    if($do == "veiculo"){
        $VeiculoAction = new VeiculoAction();

        if($action == "inicio"){
            $VeiculoAction->inicio();
        }

        if($action == "incluir"){
            $VeiculoAction->incluir($_POST);
        }

    } 

       /*Setor*/
       if($do == "setor"){
        $SetorAction = new SetorAction();

        if($action == "inicio"){
            $SetorAction->inicio();
        }

        if($action == "incluir"){
            $SetorAction->incluir($_POST);
        }

    } 
    

    // if($do == "user"){
    //     $userAction = new UserAction();
    //     if($action == "start"){
    //         $userAction->start();
    //     }

    //     if($action == "edit"){
    //         $userAction->edit($_GET);
    //     }
        
    //     if($action == "include"){
    //         $userAction->include($_POST);
    //     }

    //     if($action == "change"){
    //         $userAction->change($_POST);
    //     }

    //     if($action == "delete"){
    //         $userAction->delete($_GET);
    //     } 
    // } 
    
    // if($do == "course"){
    //     $courseAction = new CourseAction();
    //     if($action == "start"){
    //         $courseAction->start();
    //     }

    //     if($action == "edit"){
    //         $courseAction->edit($_GET);
    //     }
        
    //     if($action == "include"){
    //     $courseAction->include($_POST);
    //     }

    //     if($action == "change"){
    //         $courseAction->change($_POST);
    //     }

    //     if($action == "delete"){
    //         $courseAction->delete($_GET);
    //     }
    // } 

    // if($do == "module"){
    //     $moduleAction = new ModuleAction();
    //     if($action == "start"){
    //         $moduleAction->start($_GET);
    //     }

    //     if($action == "edit"){
    //         $moduleAction->edit($_GET);
    //     }
        
    //     if($action == "include"){
    //     $moduleAction->include($_POST);
    //     }

    //     if($action == "change"){
    //         $moduleAction->change($_POST);
    //     }

    //     if($action == "delete"){
    //         $moduleAction->delete($_GET);
    //     }
    // } 

    // if($do == "contents"){
    //     $contentsAction = new ContentsAction();
    //     if($action == "start"){
    //         $contentsAction->start($_GET);
    //     }

    //     if($action == "edit"){
    //         $contentsAction->edit($_GET);
    //     }
        
    //     if($action == "include"){
    //     $contentsAction->include($_POST);
    //     }

    //     if($action == "change"){
    //         $contentsAction->change($_POST);
    //     }

    //     if($action == "delete"){
    //         $contentsAction->delete($_GET);
    //     }
    // } 
    // MainAction::footer();
}

