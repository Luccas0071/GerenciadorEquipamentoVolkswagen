<?php
include_once '../classes/dao/ColaboradorDAO.php';
include_once '../classes/factory/DAOFactory.php';

class ColaboradorFacade{

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

    public function listarColaborador(){

        DAOFactory::getDAOFactory();
        
        $objColaboradorDAO  = new  ColaboradorDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionColaborador = $objColaboradorDAO->listarColaborador();

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return $collectionColaborador;
    }

    public function obterColaborador($codigoColaborador){

        DAOFactory::getDAOFactory();
        
        $objColaboradorDAO  = new  ColaboradorDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objColaborador = $objColaboradorDAO->obterColaborador($codigoColaborador);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return $objColaborador;
    }

    public function alterarColaborador($objColaborador){

        DAOFactory::getDAOFactory();
        
        $objColaboradorDAO  = new  ColaboradorDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objColaboradorDAO->alterarColaborador($objColaborador);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }

    public function excluirColaborador($codigoColaborador){

        DAOFactory::getDAOFactory();
        
        $objColaboradorDAO  = new  ColaboradorDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objColaboradorDAO->excluirColaborador($codigoColaborador);

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