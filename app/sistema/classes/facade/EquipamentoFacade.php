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

    public function obterEquipamento($codigoEquipamento){

        DAOFactory::getDAOFactory();
        
        $objEquipamentoDAO  = new  EquipamentoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objEquipamento = $objEquipamentoDAO->obterEquipamento($codigoEquipamento);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return $objEquipamento;
    }

    public function alterarEquipamento($objEquipamento){

        DAOFactory::getDAOFactory();
        
        $objEquipamentoDAO  = new  EquipamentoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objEquipamentoDAO->alterarEquipamento($objEquipamento);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }

    public function excluirEquipamento($codigoEquipamento){

        DAOFactory::getDAOFactory();
        
        $objEquipamentoDAO  = new  EquipamentoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objEquipamentoDAO->excluirEquipamento($codigoEquipamento);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }

    public function listarEquipamentoPorVeiculo($codigoVeiculo){

        DAOFactory::getDAOFactory();
        
        $objEquipamentoDAO  = new  EquipamentoDAO();
        $objPagina = new Pagina();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objPagina->setQtdTotalRegistro($objEquipamentoDAO->qtdEquipamentoPorVeiculo($codigoVeiculo, 0));
            $objPagina->setRegistros($objEquipamentoDAO->listarEquipamentoPorVeiculo($codigoVeiculo));


            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return $objPagina;
    }

    public function listarQtdEquipamentoPorSituacao($codigoVeiculo)
    {
        DAOFactory::getDAOFactory();

        $objEquipamentoDAO  = new EquipamentoDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $arrayQtd = array(
                'qtdEmCalibracao' => $objEquipamentoDAO->qtdEquipamentoPorVeiculo($codigoVeiculo, 1),
                'qtdCalibrado' => $objEquipamentoDAO->qtdEquipamentoPorVeiculo($codigoVeiculo, 2),
                'qtdNaoEncontrado' => $objEquipamentoDAO->qtdEquipamentoPorVeiculo($codigoVeiculo, 3)
            );

            DAOFactory::$connection->pdo->commit();
            DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
            DAOFactory::$connection->closePDO();
            throw new Exception($e->getMessage());
        }

        return $arrayQtd;
    }
}