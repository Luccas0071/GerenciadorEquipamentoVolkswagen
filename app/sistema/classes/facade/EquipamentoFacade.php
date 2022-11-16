<?php
include_once '../classes/dao/EquipamentoDAO.php';
include_once '../classes/factory/DAOFactory.php';

class EquipamentoFacade{

    public function incluirEquipamento($objEquipamento){

        DAOFactory::getDAOFactory();
        
        $objEquipamentoDAO  = new  EquipamentoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objEquipamentoDAO->incluirEquipamento($objEquipamento);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }

    public function listarEquipamento(){

        DAOFactory::getDAOFactory();
        
        $objEquipamentoDAO  = new  EquipamentoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionEquipamento = $objEquipamentoDAO->listarEquipamento();

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return $collectionEquipamento;
    }

   
}