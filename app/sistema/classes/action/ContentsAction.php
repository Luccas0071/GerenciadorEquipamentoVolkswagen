<?php
include_once '../classes/form/ContentsForm.php';
include_once '../classes/model/Contents.php';
include_once '../classes/dao/ContentsDAO.php';
include_once '../pages/configs/Config.php';
 
class ContentsAction{
    
    public function start($get){

        $objContentFacade   = new ContentsFacade();
        $smarty             = new Smarty();

        $idCourse = $get['code'];

        try {
            $collectionContent = $objContentFacade->listContent($idCourse);
            $smarty->assign("collectionContent", $collectionContent);
            
        } catch (Exception $e) {
            throw new Exception("ContentAction->star " . $e);
        }

        $smarty->display('templates/content/editContent.html');
    }

    public function edit($get){
     
        $objContentsForm      = new ContentsForm();
        $objContentsFacade    = new ContentsFacade();
        $smarty             = new Smarty();
        $objUserFacade      = new UserFacade();

        $share = $get['share'];
        $idModule = $get['code'];
        
        if($share != "I"){
            $code = $get['code'];
            $objContents = $objContentsFacade->getContentsInformation($code);
            $objContentsForm->transferModelForm($objContents);
        }
        $objContentsForm->setShare($share);

        $collectionUser = $objUserFacade->listUser();
		$smarty->assign("collectionUser", $collectionUser);

        $collectionContents = $objContentsFacade->listContents($idModule);
        $smarty->assign("collectionContents", $collectionContents);

        $smarty->assign("objContentsForm", $objContentsForm);

        if($share == "I" || $share == "A"){
            $smarty->display('templates/contents/editContents.html');
        }else {
            $smarty->display('templates/contents/displayContents.html');
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