<?php
include_once '../classes/dao/LoginDAO.php';
include_once '../classes/factory/DAOFactory.php';

class LoginFacade{

    public function iniciarSessao($objLogin){
        
        DAOFactory::getDAOFactory();
        
        $objLoginDAO = new LoginDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();
            
            $objLogin = $objLoginDAO->obterDadosLogin($objLogin);

            // $_SESSION['USUARIO']['CODIGO'] = $objLogin->getCodigo();  
            // $_SESSION['USUARIO']['LOGIN'] = $objLogin->getLogin();  
            // $_SESSION['USUARIO']['NOME'] = $objLogin->getNome();  
            // $_SESSION['USUARIO']['DDD'] = $objLogin->getDddfone();  
            // $_SESSION['USUARIO']['FONE'] = $objLogin->getFone();  
            // $_SESSION['USUARIO']['EMAIL'] = $objLogin->getEmail();  
        
            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return $objLogin;
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