<?php
include_once '../classes/dao/ArquivoDAO.php';
include_once '../classes/factory/DAOFactory.php';

class ArquivoFacade{

    public function incluirArquivo($objArquivo){

        DAOFactory::getDAOFactory();
        
        $objArquivoDAO  = new  ArquivoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $codigoPlanilha = $objArquivoDAO->incluirArquivo($objArquivo);

            foreach($objArquivo->getCollectionDadosArquivo() as $objItemArquivo){
                $objArquivoDAO->incluirItemArquivo($objItemArquivo, $codigoPlanilha);
            }

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }

    public function listarPlanilhas(){

        DAOFactory::getDAOFactory();
        
        $objArquivoDAO  = new  ArquivoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionPlanilha = $objArquivoDAO->listarPlanilha();

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return $collectionPlanilha;
    }

   
}