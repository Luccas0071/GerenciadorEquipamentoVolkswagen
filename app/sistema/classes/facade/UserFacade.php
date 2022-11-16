<?php
include_once '../classes/factory/DAOFactory.php';
include_once '../classes/dao/UserDAO.php';

class UserFacade{

    /* List */
    public function listUser(){
        
        DAOFactory::getDAOFactory();
        
        $objUserDAO  = new  UserDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionUser = $objUserDAO->listUser();

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return $collectionUser;
    }

    /* include */
    public function includeUser($objUser){
        DAOFactory::getDAOFactory();

        $objUserDAO  = new  UserDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objUserDAO->includeUser($objUser);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return true;
    }

    /* Obter */
    public function getUserInformation($code){

        DAOFactory::getDAOFactory();

        $objUserDAO  = new  UserDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objUser = $objUserDAO->getUserInformation($code);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return $objUser;
    }


    /* Change */
    public function changeUser($objUser){
        DAOFactory::getDAOFactory();

        $objUserDAO  = new  UserDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objUserDAO->changeUser($objUser);

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
    public function deleteUser($id){
        DAOFactory::getDAOFactory();

        $objUserDAO  = new  UserDAO();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objUserDAO->deleteUser($id);

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }

        return true;
    }

    // //Listar Tabela Basica
    // public function listarItemTabelaBasica($codigoTipo){
    //     DAOFactory::getDAOFactory();

    //     $objColaboradorDAO  = new  ColaboradorDAO();

    //     try {
    //         DAOFactory::$connection->pdo->beginTransaction();

    //         $colectionCargo = $objColaboradorDAO->listarItemTabelaBasica($codigoTipo);

    //         DAOFactory::$connection->pdo->commit();
	// 		DAOFactory::$connection->closePDO();
    //     } catch (Exception $e) {
    //         DAOFactory::$connection->pdo->rollBack();
	// 		DAOFactory::$connection->closePDO();
    //         throw new Exception($e->getMessage());
    //     }
    //     return $colectionCargo;;
    // }

    // //Listar Item Colaborador
    // public function listarItemColaborador($codigoColaborador){
    //     DAOFactory::getDAOFactory();

    //     $objColaboradorDAO  = new  ColaboradorDAO();

    //     try {
    //         DAOFactory::$connection->pdo->beginTransaction();

    //         $collectionCurso = $objColaboradorDAO->listarItemColaborador($codigoColaborador);

    //         DAOFactory::$connection->pdo->commit();
	// 		DAOFactory::$connection->closePDO();
    //     } catch (Exception $e) {
    //         DAOFactory::$connection->pdo->rollBack();
	// 		DAOFactory::$connection->closePDO();
    //         throw new Exception($e->getMessage());
    //     }
    //     return $collectionCurso;
    // }
}