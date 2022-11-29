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

    public function pesquisarEquipamento($veiculo, $setor, $dataInicio, $dataFinal){

        DAOFactory::getDAOFactory();
        
        $objRelatorioDAO  = new  RelatorioDAO();
        $objPagina  = new Pagina();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

            $objPagina->setQtdTotalRegistro($objRelatorioDAO->pesquisarQtdEquipamento($veiculo, $setor, $dataInicio, $dataFinal));
            $objPagina->setRegistros($objRelatorioDAO->pesquisarEquipamento($veiculo, $setor, $dataInicio, $dataFinal));

            DAOFactory::$connection->pdo->commit();
			DAOFactory::$connection->closePDO();
        } catch (Exception $e) {
            DAOFactory::$connection->pdo->rollBack();
			DAOFactory::$connection->closePDO();
            throw new Exception($e);
        }
        return $objPagina;
    }

    public function gerarRelatorio($objPagina){

        DAOFactory::getDAOFactory();
        
        $objEquipamentoDAO  = new  EquipamentoDAO();
        $objColaboradorDAO  = new  ColaboradorDAO();
        $mpdf               = new \Mpdf\Mpdf();
        $smarty             = new Smarty();

        try {
            DAOFactory::$connection->pdo->beginTransaction();

        
            // $collectionEquipamento = $objEquipamentoDAO->listarEquipamento();
            $smarty->assign('objPagina', $objPagina);
            $output = $smarty->fetch('templateRelatorios/pdfRelatorioEquipamento.html');

            

            $mpdf->WriteHTML($output);

           //D = Download

            $mpdf->Output('teste.pdf','D');
            
            
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