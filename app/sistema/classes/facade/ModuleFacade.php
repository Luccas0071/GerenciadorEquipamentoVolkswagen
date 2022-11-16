<?php
include_once '../classes/dao/ModuleDAO.php';
include_once '../classes/factory/DAOFactory.php';

class ModuleFacade{


    public function listModule($idCourse){
        
        DAOFactory::getDAOFactory();
        
        $objModuleDAO  = new  ModuleDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();
            

            $collectionModule= $objModuleDAO->listModule($idCourse);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return $collectionModule;
 
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


    public function getModuleInformation($code){
        DAOFactory::getDAOFactory();

        $objModuleDAO  = new  ModuleDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objModule = $objModuleDAO->getModuleInformation($code);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return $objModule;
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