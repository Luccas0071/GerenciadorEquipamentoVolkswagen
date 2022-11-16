<?php
include_once '../classes/dao/ComboDAO.php';
include_once '../classes/factory/DAOFactory.php';

class ComboFacade{

    public function listarTabelaBasica($tipoTabelaBasica){

        DAOFactory::getDAOFactory();
        
        $objComboDAO  = new  ComboDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionTabelaBasica = $objComboDAO->listarTabelaBasicaPorTipo($tipoTabelaBasica);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return $collectionTabelaBasica;
    }

}