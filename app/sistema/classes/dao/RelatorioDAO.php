<?php
include_once '../classes/factory/DAOFactory.php';
include_once '../classes/facade/RelatorioFacade.php';
include_once '../classes/form/RelatorioForm.php';
include_once '../classes/model/Relatorio.php';

class RelatorioDAO extends DAOFactory{
    
    public function incluirColaborador($objColaborador){

		$sql  = " INSERT INTO gerenciador.tb_colaborador   ";
		$sql .= " (   ";
		$sql .= " 	col_nome,  ";
		$sql .= " 	col_data_admissao, ";
		$sql .= " 	col_funcao ";
		$sql .= " )   ";
		$sql .= " VALUES    ";
		$sql .= " (   ";
		$sql .= " 	:nome,  ";
		$sql .= " 	:dataAdmissao,  ";
		$sql .= " 	:funcao ";
		$sql .= " )  ";

        $query = parent::$connection->pdo->prepare($sql);

        $query->bindParam(':nome', 				$objColaborador->getNome(), 			PDO::PARAM_STR);
        $query->bindParam(':dataAdmissao', 		$objColaborador->getDataAdmissao(), 	PDO::PARAM_STR);
        $query->bindParam(':funcao', 			$objColaborador->getFuncao(), 			PDO::PARAM_STR);

		if (!$query->execute()) {
			$collectionErro = $query->errorInfo();
			throw new Exception("ColaboradorDAO->incluirColaborador " . $collectionErro[2]);
		}
        return true;
    }

    public function listarColaborador(){

		$colectionColaborador = array();

		$sql  = " SELECT ";
		$sql .= " 	col_codigo, ";
		$sql .= " 	col_nome, ";
		$sql .= " 	col_data_admissao, ";
		$sql .= " 	col_funcao ";
		$sql .= " FROM gerenciador.tb_colaborador ";

        $query = parent::$connection->pdo->prepare($sql);

		if ($query->execute()) {
            while ($rs = $query->fetch(PDO::FETCH_ASSOC)) {

                $objColaborador = new Colaborador();
                $objColaborador->setCodigo($rs['col_codigo']);
                $objColaborador->setNome($rs['col_nome']);
                $objColaborador->setFuncao($rs['col_funcao']);
                $objColaborador->setDataAdmissao($rs['col_data_admissao']);

                array_push($colectionColaborador, $objColaborador);
            }
        } else {
            $collectionErro = $query->errorInfo();
            throw new Exception("ColaboradorDAO->listarColaborador " . $collectionErro[2]);
        }
        return $colectionColaborador;
    }

	public function pesquisarEquipamento($veiculo, $setor, $dataInicio, $dataFinal){

		$sql  = " SELECT ";
		$sql .= " 	equ.equ_codigo, ";
		$sql .= " 	equ.equ_tacto, ";
		$sql .= " 	equ.equ_tipo_frequencia, ";
		$sql .= " 	equ.equ_modelo, ";
		$sql .= " 	equ.equ_numero_serie, ";
		$sql .= " 	equ.equ_data_vencimento, ";
		$sql .= " 	equ.equ_torque, ";
		$sql .= " 	equ.equ_descricao_operacao, ";
		$sql .= " 	equ.equ_data_calibragem, ";
		$sql .= " 	equ.equ_dados_utima_calibragem, ";
		$sql .= " 	equ.equ_media, ";
		$sql .= " 	equ.equ_dispersao, ";
		$sql .= " 	equ.equ_observacao,  ";
		$sql .= " 	equ.equ_qtd_dias_vencimento, ";
		$sql .= " 	equ.col_codigo, ";
		$sql .= " 	equ.tab_codigo, ";
		$sql .= " 	equ.set_codigo, ";
		$sql .= " 	equ.vei_codigo, ";
		$sql .= " 	tab.tab_descricao, ";
		$sql .= " 	vei.vei_nome, ";
		$sql .= " 	col.col_nome, ";
		$sql .= " 	seto.set_nome ";
		$sql .= " FROM gerenciador.tb_equipamento as equ ";
		$sql .= " INNER JOIN gerenciador.tb_tabela_basica AS tab ON tab.tab_codigo = equ.tab_codigo ";
		$sql .= " INNER JOIN gerenciador.tb_veiculo AS vei ON vei.vei_codigo = equ.vei_codigo ";
		$sql .= " INNER JOIN gerenciador.tb_colaborador AS col ON col.col_codigo = equ.col_codigo ";
		$sql .= " INNER JOIN gerenciador.tb_setor AS seto ON seto.set_codigo = equ.col_codigo ";

		$where = "";

		if ($veiculo != "") {
            if ($where != "") {
                $where .= " AND ";
            }
            $where .= " equ.vei_codigo = :codigoVeiculo ";
        }

		if ($setor != "") {
            if ($where != "") {
                $where .= " AND ";
            }
            $where .= " equ.set_codigo = :codigoSetor ";
        }

		if ($dataInicio != "" && $dataFinal != "") {
            if ($where != "") {
                $where .= " AND ";
            }
            $where .= " equ.equ_data_vencimento between :dataInicio AND :dataFim ";
        }

		if ($where != "") {
            $sql .= "WHERE " . $where;
        }

        $query = parent::$connection->pdo->prepare($sql);

		if($veiculo){
			$query->bindParam(":codigoVeiculo", 	$veiculo, 		PDO::PARAM_INT);
		}
		if($setor){
			$query->bindParam(":codigoSetor", 		$setor, 		PDO::PARAM_INT);
		}
		if($dataInicio){
			$query->bindParam(":dataInicio", 		$dataInicio, 	PDO::PARAM_STR);
		}
		if($dataFinal){
			$query->bindParam(":dataFim", 			$dataFinal, 	PDO::PARAM_STR);
		}

        $collectionEquipamento = array();
        if ($query->execute()) {
            while ($rs = $query->fetch(PDO::FETCH_ASSOC)) {
               
				$objEquipamento = new Equipamento();

				$objEquipamento->setCodigo($rs['equ_codigo']);
				$objEquipamento->setTacto($rs['equ_tacto']);
				$objEquipamento->setTipoFrequencia($rs['equ_tipo_frequencia']);
				$objEquipamento->setModelo($rs['equ_modelo']);
				$objEquipamento->setNumeroSerie($rs['equ_numero_serie']);
				$objEquipamento->setDataVencimento($rs['equ_data_vencimento']);
				$objEquipamento->setTorque($rs['equ_torque']);
				$objEquipamento->setDescricaoOperacao($rs['equ_descricao_operacao']);
				$objEquipamento->setDataCalibragem($rs['equ_data_calibragem']);
				$objEquipamento->setDadosUtimaCalibragem($rs['equ_dados_utima_calibragem']);
				$objEquipamento->setMedia($rs['equ_media']);
				$objEquipamento->setDispersao($rs['equ_dispersao']);
				$objEquipamento->setObservacao($rs['equ_observacao']);
				$objEquipamento->setQtdDiasVencimento($rs['equ_qtd_dias_vencimento']);
	
				$objEquipamento->setObjColaborador(new Colaborador());
				$objEquipamento->getObjColaborador()->setCodigo($rs['col_codigo']);
				$objEquipamento->getObjColaborador()->setNome($rs['col_nome']);
				
				$objEquipamento->setObjVeiculo(new Veiculo());
				$objEquipamento->getObjVeiculo()->setCodigo($rs['vei_codigo']);
				$objEquipamento->getObjVeiculo()->setNome($rs['vei_nome']);
				
				$objEquipamento->setObjSetor(new Setor());
				$objEquipamento->getObjSetor()->setCodigo($rs['set_codigo']);
				$objEquipamento->getObjSetor()->setNome($rs['set_nome']);
	
				$objEquipamento->setObjStatus(new TabelaBasica());
				$objEquipamento->getObjStatus()->setCodigo($rs['tab_codigo']);
				$objEquipamento->getObjStatus()->setDescricao($rs['tab_descricao']);

                array_push($collectionEquipamento, $objEquipamento);
            }
        } else {
            $collectionErro = $query->errorInfo();
            throw new Exception("PlanilhaCalibracaoDAO->pesquisarEquipamento" . $collectionErro[2]);
        }
        return $collectionEquipamento;
    }
	public function pesquisarQtdEquipamento($veiculo, $setor, $dataInicio, $dataFinal){

		$sql  = " SELECT ";
		$sql .= " 	count(equ.equ_codigo) as qtd_equipamento ";
		$sql .= " FROM gerenciador.tb_equipamento as equ ";
		$sql .= " INNER JOIN gerenciador.tb_tabela_basica AS tab ON tab.tab_codigo = equ.tab_codigo ";
		$sql .= " INNER JOIN gerenciador.tb_veiculo AS vei ON vei.vei_codigo = equ.vei_codigo ";
		$sql .= " INNER JOIN gerenciador.tb_colaborador AS col ON col.col_codigo = equ.col_codigo ";
		$sql .= " INNER JOIN gerenciador.tb_setor AS seto ON seto.set_codigo = equ.col_codigo ";

		$where = "";

		if ($veiculo != "") {
            if ($where != "") {
                $where .= " AND ";
            }
            $where .= " equ.vei_codigo = :codigoVeiculo ";
        }

		if ($setor != "") {
            if ($where != "") {
                $where .= " AND ";
            }
            $where .= " equ.set_codigo = :codigoSetor ";
        }

		if ($dataInicio != "" && $dataFinal != "") {
            if ($where != "") {
                $where .= " AND ";
            }
            $where .= " equ.equ_data_vencimento between :dataInicio AND :dataFim ";
        }

		if ($where != "") {
            $sql .= "WHERE " . $where;
        }

        $query = parent::$connection->pdo->prepare($sql);

    	if($veiculo){
			$query->bindParam(":codigoVeiculo", 	$veiculo, 		PDO::PARAM_INT);
		}
		if($setor){
			$query->bindParam(":codigoSetor", 		$setor, 		PDO::PARAM_INT);
		}
		if($dataInicio){
			$query->bindParam(":dataInicio", 		$dataInicio, 	PDO::PARAM_STR);
		}
		if($dataFinal){
			$query->bindParam(":dataFim", 			$dataFinal, 	PDO::PARAM_STR);
		}
	
		if ($query->execute()) {
            $rs = $query->fetch(PDO::FETCH_ASSOC);
            return $rs['qtd_equipamento'];
        } else {
            $collectionErro = $query->errorInfo();
            throw new Exception("RelatorioDAO->pesquisarQtdEquipamento " . $collectionErro[2]);
        }
    }

    


}