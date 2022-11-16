<?php
include_once '../classes/dao/InicioDAO.php';
include_once '../classes/factory/DAOFactory.php';

class InicioFacade{


    public function listarDadosPlanilha(){
        
        DAOFactory::getDAOFactory();
        
        $objInicioDAO  = new  InicioDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionPlanilha = $objInicioDAO->listarDadosPlanilha();

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return $collectionPlanilha;
 
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