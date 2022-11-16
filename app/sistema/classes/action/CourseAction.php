<?php
include_once '../classes/form/CourseForm.php';
include_once '../classes/model/Course.php';
include_once '../classes/dao/CourseDAO.php';
include_once '../pages/configs/Config.php';
 
class CourseAction{
    
    public function start(){

        $objCourseFacade   = new CourseFacade();
        $smarty             = new Smarty();

        try {
            $collectionCourse = $objCourseFacade->listCourse();
            $smarty->assign("collectionCourse", $collectionCourse);

        } catch (Exception $e) {
            throw new Exception("CourseAction->star " . $e);
        }

        $smarty->display('templates/course/listCourse.html');
    }

    public function edit($get){
     
        $objCourseForm      = new CourseForm();
        $objCourseFacade    = new CourseFacade();
        $smarty             = new Smarty();
        $objUserFacade      = new UserFacade();

        $share = $get['share'];

        if($share != "I"){
            $code = $get['code'];
            $objCourse = $objCourseFacade->getCourseInformation($code);
            $objCourseForm->transferModelForm($objCourse);
        }
        $objCourseForm->setShare($share);

        $collectionUser = $objUserFacade->listUser();
		$smarty->assign("collectionUser", $collectionUser);

        $smarty->assign("objCourseForm", $objCourseForm);

        if($share == "I" || $share == "A"){
            $smarty->display('templates/course/editCourse.html');
        }else {
            $smarty->display('templates/course/displayCourse.html');
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