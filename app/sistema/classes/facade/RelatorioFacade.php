<?php
include_once '../classes/dao/RelatorioDAO.php';
include_once '../classes/factory/DAOFactory.php';

class RelatorioFacade{

    public function incluirColaborador($objColaborador){

        DAOFactory::getDAOFactory();
        
        $objColaboradorDAO  = new  ColaboradorDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objColaboradorDAO->incluirColaborador($objColaborador);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }

    public function gerarRelatorio(){

        DAOFactory::getDAOFactory();
        
        $objEquipamentoDAO  = new  EquipamentoDAO();
        $objColaboradorDAO  = new  ColaboradorDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionEquipamento = $objEquipamentoDAO->listarEquipamento();

            
            
            
            
            
            
            
            
            
            
            
            
            print_r($collectionEquipamento);
            exit;

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