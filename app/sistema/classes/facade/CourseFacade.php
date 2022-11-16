<?php
include_once '../classes/dao/CourseDAO.php';
include_once '../classes/factory/DAOFactory.php';

class CourseFacade{


    public function listCourse(){
        
        DAOFactory::getDAOFactory();
        
        $objCourseDAO  = new  CourseDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionCourse= $objCourseDAO->listCourse();

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return $collectionCourse;
 
    }

    public function includeCourse($objCourse){
        DAOFactory::getDAOFactory();

        $objCourseDAO  = new  CourseDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();
            
            $objCourseDAO->includeCourse($objCourse);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }


    public function getCourseInformation($code){
        DAOFactory::getDAOFactory();

        $objCourseDAO  = new  CourseDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objCourse = $objCourseDAO->getCourseInformation($code);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return $objCourse;
    }



    public function changeCourse($objCourse){
        DAOFactory::getDAOFactory();

        $objCourseDAO  = new  CourseDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objCourseDAO->changeCourse($objCourse);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }

    /* Delete */
    public function deleteCourse($id){
        DAOFactory::getDAOFactory();

        $objCourseDAO  = new  CourseDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objCourseDAO->deleteCourse($id);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }
}