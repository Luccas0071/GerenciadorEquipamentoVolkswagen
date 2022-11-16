<?php
include_once '../classes/dao/ContentsDAO.php';
include_once '../classes/factory/DAOFactory.php';

class ContentsFacade{


    public function listContents($idModule){
        
        DAOFactory::getDAOFactory();
        
        $objContentsDAO  = new  ContentsDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();
            

            $collectionContents= $objContentsDAO->listContents($idModule);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return $collectionContents;
 
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