<?php
include_once '../classes/form/loginForm.php';
include_once '../classes/dao/loginDAO.php';

class LoginAction
{
    public function start(){

        $objInicioFacade   = new InicioFacade();
        $smarty            = new Smarty();

        try {
            // $collectionPlanilha = $objInicioFacade->listarDadosPlanilha();
            // $smarty->assign("collectionPlanilha", $collectionPlanilha);

        } catch (Exception $e) {
            throw new Exception("CourseAction->star " . $e);
        }

        $smarty->display('templates/login/login.html');
	}

    public function logar($request){

        $objLoginFacade = new LoginFacade();
        $objLoginForm  = new LoginForm();
        $smarty         = new Smarty();

        try {
            $objLoginForm->transferRequestForm($request);
            $objLogin = $objLoginForm->transferFormModel();

            $objLogin = $objLoginFacade->iniciarSessao($objLogin);

        } catch (Exception $e) {
            throw new Exception("CourseAction->star " . $e);
        }
        
        if($objLogin->getCodigo() != ""){
            $_SESSION['USUARIO']['NOME'] = $objLogin->getNome();
            return true;
        }
	}

    public function logoff(){
        session_destroy();
	}

    public function alterar(){
	
	}

    public function excluir(){
	
	}


}

   