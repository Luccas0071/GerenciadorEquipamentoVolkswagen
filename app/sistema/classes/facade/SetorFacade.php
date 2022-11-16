<?php
include_once '../classes/dao/SetorDAO.php';
include_once '../classes/factory/DAOFactory.php';

class SetorFacade{

    public function incluirSetor($objSetor){

        DAOFactory::getDAOFactory();
        
        $objSetorDAO  = new  SetorDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objSetorDAO->incluirSetor($objSetor);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }

    public function listarSetor(){

        DAOFactory::getDAOFactory();
        
        $objSetorDAO  = new  SetorDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionSetor = $objSetorDAO->listarSetor();

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return $collectionSetor;
    }

   
}