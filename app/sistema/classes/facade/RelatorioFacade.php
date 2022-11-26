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
        $mpdf = new \Mpdf\Mpdf();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $collectionEquipamento = $objEquipamentoDAO->listarEquipamento();

            $mpdf->WriteHTML('<h1>Hello world!</h1>');

            foreach($collectionEquipamento as $objEquipamento){
                $mpdf->WriteHTML('<p>'. $objEquipamento->getModelo() .'</p>');
            }

            $mpdf->Output('','D');
            
            
            
            
            
            
            
            
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