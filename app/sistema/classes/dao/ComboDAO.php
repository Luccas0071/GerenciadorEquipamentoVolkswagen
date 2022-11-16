<?php
include_once '../classes/factory/DAOFactory.php';
include_once '../classes/facade/ColaboradorFacade.php';
include_once '../classes/form/ColaboradorForm.php';
include_once '../classes/model/Colaborador.php';
include_once '../classes/model/TabelaBasica.php';

class ComboDAO extends DAOFactory{
    
    public function listarTabelaBasicaPorTipo($tipoTabelaBasica){

		$collectionTabelaBasica = array();

		$sql  = " SELECT ";
        $sql .= "   tab_codigo, ";
        $sql .= "   tab_descricao, ";
        $sql .= "   tab_tipo ";
        $sql .= " FROM ";
        $sql .= "   gerenciador.tb_tabela_basica as tab ";
        $sql .= "  WHERE tab.tab_tipo = :tipoTabela ";

        $query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':tipoTabela', $tipoTabelaBasica, PDO::PARAM_INT);

		if ($query->execute()) {
            while ($rs = $query->fetch(PDO::FETCH_ASSOC)) {

                $objTabelaBasica = new TabelaBasica();
                $objTabelaBasica->setCodigo($rs['tab_codigo']);
                $objTabelaBasica->setDescricao($rs['tab_descricao']);
                $objTabelaBasica->setTipoTabela($rs['tab_tipo']);

                array_push($collectionTabelaBasica, $objTabelaBasica);
            }
        } else {
            $collectionErro = $query->errorInfo();
            throw new Exception("ColaboradorDAO->listarColaborador " . $collectionErro[2]);
        }
        return $collectionTabelaBasica;
    }


}