<?php
include_once '../classes/form/UserForm.php';
include_once '../classes/facade/UserFacade.php';
include_once '../classes/model/User.php';
include_once '../classes/dao/UserDAO.php';
include_once '../pages/configs/config.php';

class UserAction{

    public function start(){

        $objUserFacade   = new UserFacade();
        $smarty          = new Smarty();

        try {
            $collectionUser = $objUserFacade->listUser();
            $smarty->assign("collectionUser", $collectionUser);

        } catch (Exception $e) {
            throw new Exception("UserAction->star " . $e);
        }
        

        $smarty->display('templates/user/listUser.html');
	}

    public function edit($get){
        $objUserForm     = new UserForm();
        $objUserFacade   = new UserFacade();
        $smarty          = new Smarty();

        $share = $get['share'];
        
        if($share != "I"){
            $code = $get['code'];
            $objUser = $objUserFacade->getUserInformation($code);
            $objUserForm->transferModelForm($objUser);
        }

        $objUserForm->setShare($share);
        $smarty->assign("objUserForm", $objUserForm);

        if($share == "I" || $share == "A"){
            $smarty->display('templates/user/editUser.html');
        }else {
            $smarty->display('templates/user/displayUser.html');
        }
	
	}

    public function include($request){
       $objUserForm      = new UserForm();
       $objUserFacade    = new UserFacade();
       $smarty           = new Smarty();

       $objUserForm->transferRequestForm($request);
       $objUser = $objUserForm->transferFormModel();

       $objUserFacade->includeUser($objUser);
    }

    public function change($request){

        $objUserForm = new UserForm();
        $objUserFacade = new UserFacade();

        $objUserForm->transferRequestForm($request);
        $objUser = $objUserForm->transferFormModel();

        $objUserFacade->changeUser($objUser);
	}

    public function delete($get){

        $objUserFacade = new UserFacade();

        $id = $get['code'];
       
        $objUserFacade->deleteUser($id);
	}

    /* public function itemListUser($get){
        $objUserFacade = new UserFacade();
       

        $codigoUser = $get['codigoUser'];
      
        try {
            $collectionItemUser = $objUserFacade->listarItemUser($codigoUser);
            $arrayItemUser = $objItemUserCurso->transfereCollectionItemUserArray($collectionItemUser);
        } catch (Exception $e) {
            //throw $th;
        }

        echo json_encode($arrayItemUser);
	} */


}

   