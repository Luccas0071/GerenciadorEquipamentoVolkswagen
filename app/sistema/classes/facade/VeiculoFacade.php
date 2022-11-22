<?php
include_once '../classes/dao/VeiculoDAO.php';
include_once '../classes/factory/DAOFactory.php';

class VeiculoFacade{

    public function incluirVeiculo($objVeiculo){

        DAOFactory::getDAOFactory();
        
        $objVeiculoDAO  = new  VeiculoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objVeiculoDAO->incluirVeiculo($objVeiculo);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }

    public function listarVeiculo(){

        DAOFactory::getDAOFactory();
        
        $objVeiculoDAO  = new VeiculoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionVeiculo = $objVeiculoDAO->listarVeiculo();

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return $collectionVeiculo;
    }

    public function excluirVeiculo($codigoVeiculo){

        DAOFactory::getDAOFactory();
        
        $objVeiculoDAO  = new  VeiculoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objVeiculoDAO->excluirVeiculo($codigoVeiculo);

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