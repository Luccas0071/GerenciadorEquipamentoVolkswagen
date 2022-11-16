<?php
include_once '../classes/form/ModuleForm.php';
include_once '../classes/model/Module.php';
include_once '../classes/dao/ModuleDAO.php';
include_once '../pages/configs/Config.php';
 
class ModuleAction{
    
    public function start($get){

        $objModuleForm      = new ModuleForm();
        $objModuleFacade    = new ModuleFacade();
        $objUserFacade      = new UserFacade();
        $smarty             = new Smarty();

        $idCourse = $get['code'];
        $share = $get['share'];

        try {
            $collectionUser = $objUserFacade->listUser();
		    $smarty->assign("collectionUser", $collectionUser);

            $collectionModule = $objModuleFacade->listModule($idCourse);
            $smarty->assign("collectionModule", $collectionModule);
            
        } catch (Exception $e) {
            throw new Exception("ModuleAction->star " . $e);
        }
        $objModuleForm->setShare($share);
        $smarty->assign("objModuleForm", $objModuleForm);

        $smarty->display('templates/module/editModule.html');
    }

    public function edit($get){
     
        $objModuleForm      = new ModuleForm();
        $objModuleFacade    = new ModuleFacade();
        $smarty             = new Smarty();
        $objUserFacade      = new UserFacade();

        $share = $get['share'];
        $idCourse = $get['code'];
        
        if($share != "I"){
            $code = $get['code'];

            $objModule = $objModuleFacade->getModuleInformation($code);
            $objModuleForm->transferModelForm($objModule);
        }
        $objModuleForm->setShare($share);

        $collectionUser = $objUserFacade->listUser();
		$smarty->assign("collectionUser", $collectionUser);

        $collectionModule = $objModuleFacade->listModule($idCourse);
        $smarty->assign("collectionModule", $collectionModule);

        $smarty->assign("objModuleForm", $objModuleForm);

        if($share == "I" || $share == "A"){
            $smarty->display('templates/module/editModule.html');
        }else {
            $smarty->display('templates/module/displayModule.html');
        }
    }

    public function include($request){

        $objCourseForm      = new CourseForm();
        $objCourseFacade    = new CourseFacade();

        $objCourseForm->transferRequestForm($request);
        $objCourse = $objCourseForm->transferFormModel();

        $objCourseFacade->includeCourse($objCourse);
    }

    public function change($request){

        $objCourseForm = new CourseForm();
        $objCourseFacade = new CourseFacade();

        $objCourseForm->transferRequestForm($request);
        $objCourse = $objCourseForm->transferFormModel();

        $objCourseFacade->changeCourse($objCourse);
    }

    public function delete($get){

        $objCourseFacade = new CourseFacade();
      
        $id = $get['code'];
        
        $objCourseFacade->deleteCourse($id);
    }


}