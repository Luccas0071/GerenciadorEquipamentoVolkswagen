<?php
include_once '../classes/dao/PlanilhaCalibracaoDAO.php';
include_once '../classes/factory/DAOFactory.php';

class PlanilhaCalibracaoFacade{

    public function incluirPlanilhaCalibracao($objPlanilhaCalibracao){

        DAOFactory::getDAOFactory();
        
        $objPlanilhaCalibracaoDAO  = new  PlanilhaCalibracaoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $codigoPlanilha = $objPlanilhaCalibracaoDAO->incluirPlanilhaCalibracao($objPlanilhaCalibracao);

            foreach($objPlanilhaCalibracao->getCollectionItemPlanilhaCalibracao() as $objItemPlanilhaCalibracao){
                $objPlanilhaCalibracaoDAO->incluirItemPlanilhaCalibracao($objItemPlanilhaCalibracao, $codigoPlanilha);
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

    public function listarPlanilhaCalibracao(){

        DAOFactory::getDAOFactory();
        
        $objPlanilhaCalibracaoDAO  = new  PlanilhaCalibracaoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionPlanilhaCalibracao = $objPlanilhaCalibracaoDAO->listarPlanilhaCalibracao();

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return $collectionPlanilhaCalibracao;
    }

    public function obterPlanilhaCalibracao($codigoPlanilhaCalibracao){

        DAOFactory::getDAOFactory();
        
        $objPlanilhaCalibracaoDAO  = new  PlanilhaCalibracaoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objPlanilhaCalibracao = $objPlanilhaCalibracaoDAO->obterPlanilhaCalibracao($codigoPlanilhaCalibracao);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return $objPlanilhaCalibracao;
    }

    public function listarItemPlanilhaCalibracao($codigoPlanilhaCalibracao)
    {
        DAOFactory::getDAOFactory();

        $objPlanilhaCalibracaoDAO = new PlanilhaCalibracaoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionItemPlanilhaCalibracao = $objPlanilhaCalibracaoDAO->listarItemPlanilhaCalibracao($codigoPlanilhaCalibracao);

            DAOFactory::$connection->pdo->commit();
            DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return $collectionItemPlanilhaCalibracao;
    }

    public function excluirPlanilhaCalibracao($codigoPlanilhaCalibracao){

        DAOFactory::getDAOFactory();
        
        $objPlanilhaCalibracaoDAO  = new  PlanilhaCalibracaoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objPlanilhaCalibracaoDAO->excluirPlanilhaCalibracao($codigoPlanilhaCalibracao);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }

    public function alterarPlanilhaCalibracao($objPlanilhaCalibracao){

        DAOFactory::getDAOFactory();
        
        $objPlanilhaCalibracaoDAO  = new  PlanilhaCalibracaoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objPlanilhaCalibracaoDAO->alterarPlanilhaCalibracao($objPlanilhaCalibracao);

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