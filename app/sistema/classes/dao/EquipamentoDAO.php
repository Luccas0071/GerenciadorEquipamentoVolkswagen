<?php
include_once '../classes/factory/DAOFactory.php';
include_once '../classes/facade/EquipamentoFacade.php';
include_once '../classes/form/EquipamentoForm.php';
include_once '../classes/model/Equipamento.php';

class EquipamentoDAO extends DAOFactory{
    
    public function incluirEquipamento($objEquipamento){

		$sql  = " INSERT INTO gerenciador.tb_equipamento ";
		$sql .= " ( ";
		$sql .= " 	equ_tacto, ";
		$sql .= " 	equ_tipo_frequencia, ";
		$sql .= " 	equ_modelo, ";
		$sql .= " 	equ_numero_serie, ";
		$sql .= " 	equ_data_vencimento, ";
		$sql .= " 	equ_torque, ";
		$sql .= " 	equ_descricao_operacao, ";
		$sql .= " 	equ_data_calibragem, ";
		$sql .= " 	equ_dados_utima_calibragem, ";
		$sql .= " 	equ_media, ";
		$sql .= " 	equ_dispersao, ";
		$sql .= " 	equ_observacao, ";
		$sql .= " 	equ_qtd_dias_vencimento, ";
		$sql .= " 	col_codigo, ";
		$sql .= " 	tab_codigo, ";
		$sql .= " 	set_codigo, ";
		$sql .= " 	vei_codigo ";
		$sql .= " ) VALUES ( ";
		$sql .= " 	:tacto, ";
		$sql .= " 	:tipoFrequencia, ";
		$sql .= " 	:modelo, ";
		$sql .= " 	:numeroSerie, ";
		
		if($objEquipamento->getDataVencimento() != ""){
			$sql .= " 	:dataVencimento, ";
		}else{
			$sql .= " 	null, ";
		}
		$sql .= " 	:torque, ";
		$sql .= " 	:descricaoOperacao, ";
		$sql .= " 	:dataCalibragem, ";
		$sql .= " 	:dadosUtimaCalibragem, ";
		$sql .= " 	:media, ";
		$sql .= " 	:dispersao, ";
		$sql .= " 	:observacao, ";
		$sql .= " 	:qtdDiasVencimento, ";
		$sql .= " 	:codigoColaborador, ";
		$sql .= " 	:codigoStatus, ";
		$sql .= " 	:codigoSetor, ";
		$sql .= " 	:codigoVeiculo ";
	  	$sql .= " ) ";

        $query = parent::$connection->pdo->prepare($sql);

        $query->bindParam(':tacto', 					$objEquipamento->getTacto(), 						PDO::PARAM_STR);
        $query->bindParam(':tipoFrequencia', 			$objEquipamento->getTipoFrequencia(), 				PDO::PARAM_STR);
        $query->bindParam(':modelo', 					$objEquipamento->getModelo(), 						PDO::PARAM_STR);
        $query->bindParam(':numeroSerie', 				$objEquipamento->getNumeroSerie(), 					PDO::PARAM_STR);
        $query->bindParam(':dataVencimento', 			$objEquipamento->getDataVencimento(), 				PDO::PARAM_STR);
        $query->bindParam(':torque', 					$objEquipamento->getTorque(), 						PDO::PARAM_STR);
        $query->bindParam(':descricaoOperacao', 		$objEquipamento->getDescricaoOperacao(), 			PDO::PARAM_STR);
        $query->bindParam(':dataCalibragem', 			$objEquipamento->getDataCalibragem(), 				PDO::PARAM_STR);
        $query->bindParam(':dadosUtimaCalibragem', 		$objEquipamento->getDadosUtimaCalibragem(), 		PDO::PARAM_STR);
        $query->bindParam(':media', 					$objEquipamento->getMedia(), 						PDO::PARAM_STR);
        $query->bindParam(':dispersao', 				$objEquipamento->getDispersao(), 					PDO::PARAM_STR);
        $query->bindParam(':observacao', 				$objEquipamento->getObservacao(), 					PDO::PARAM_STR);
        $query->bindParam(':qtdDiasVencimento', 		$objEquipamento->getQtdDiasvencimento(), 			PDO::PARAM_INT);
        $query->bindParam(':codigoColaborador', 		$objEquipamento->getObjColaborador()->getCodigo(), 	PDO::PARAM_INT);
        $query->bindParam(':codigoStatus', 				$objEquipamento->getObjStatus()->getCodigo(), 		PDO::PARAM_INT);
        $query->bindParam(':codigoSetor', 				$objEquipamento->getObjSetor()->getCodigo(), 		PDO::PARAM_INT);
        $query->bindParam(':codigoVeiculo', 			$objEquipamento->getObjVeiculo()->getCodigo(), 		PDO::PARAM_INT);

		if (!$query->execute()) {
			$collectionErro = $query->errorInfo();
			throw new Exception("EquipamentoDAO->incluirEquipamento " . $collectionErro[2]);
		}
        return true;
    }

    public function listarEquipamento(){

		$collectionEquipamento = array();

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
		$sql .= " 	equ.equ_observacao, ";
		$sql .= " 	equ.equ_qtd_dias_vencimento, ";
		$sql .= " 	equ.col_codigo, ";
		$sql .= " 	equ.tab_codigo, ";
		$sql .= " 	tab.tab_descricao ";
		$sql .= " FROM gerenciador.tb_equipamento AS equ ";
		$sql .= " LEFT JOIN gerenciador.tb_tabela_basica AS tab ON equ.tab_codigo = tab.tab_codigo ";

        $query = parent::$connection->pdo->prepare($sql);

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

				$objEquipamento->setObjStatus(new TabelaBasica());
				$objEquipamento->getObjStatus()->setCodigo($rs['tab_codigo']);
				$objEquipamento->getObjStatus()->setDescricao($rs['tab_descricao']);

                array_push($collectionEquipamento, $objEquipamento);
            }
        } else {
            $collectionErro = $query->errorInfo();
            throw new Exception("EquipamentoDAO->listarEquipamento " . $collectionErro[2]);
        }
        return $collectionEquipamento;
    }

	public function obterEquipamento(){

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
		$sql .= " 	equ.equ_observacao, ";
		$sql .= " 	equ.equ_qtd_dias_vencimento, ";
		$sql .= " 	equ.col_codigo, ";
		$sql .= " 	equ.tab_codigo, ";
		$sql .= " 	equ.set_codigo, ";
		$sql .= " 	equ.vei_codigo, ";
		$sql .= " 	tab.tab_descricao ";
		$sql .= " FROM gerenciador.tb_equipamento AS equ ";
		$sql .= " LEFT JOIN gerenciador.tb_tabela_basica AS tab ON equ.tab_codigo = tab.tab_codigo ";

        $query = parent::$connection->pdo->prepare($sql);

		if ($query->execute()) {
            $rs = $query->fetch(PDO::FETCH_ASSOC);

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
			
			$objEquipamento->setObjVeiculo(new Veiculo());
			$objEquipamento->getObjVeiculo()->setCodigo($rs['vei_codigo']);
			
			$objEquipamento->setObjSetor(new Setor());
			$objEquipamento->getObjSetor()->setCodigo($rs['set_codigo']);

			$objEquipamento->setObjStatus(new TabelaBasica());
			$objEquipamento->getObjStatus()->setCodigo($rs['tab_codigo']);
			$objEquipamento->getObjStatus()->setDescricao($rs['tab_descricao']);
        } else {
            $collectionErro = $query->errorInfo();
            throw new Exception("EquipamentoDAO->listarEquipamento " . $collectionErro[2]);
        }

        return $objEquipamento;
    }

	public function alterarEquipamento($objEquipamento){

		$sql = " UPDATE gerenciador.tb_equipamento SET  ";
		$sql .= " equ_tacto = 						:tacto, ";
		$sql .= " equ_tipo_frequencia = 			:tipoFrequencia, ";
		$sql .= " equ_modelo = 						:modelo, ";
		$sql .= " equ_numero_serie = 				:numeroSerie, ";
		$sql .= " equ_data_vencimento = 			:dataVencimento, ";
		$sql .= " equ_torque = 						:torque, ";
		$sql .= " equ_descricao_operacao = 			:descricaoOperacao, ";
		$sql .= " equ_data_calibragem = 			:dataCalibragem, ";
		$sql .= " equ_dados_utima_calibragem = 		:dadosUtimaCalibragem, ";
		$sql .= " equ_media = 						:media, ";
		$sql .= " equ_dispersao = 					:dispersao, ";
		$sql .= " equ_observacao = 					:observacao, ";
		$sql .= " equ_qtd_dias_vencimento = 		:qtdDiasVencimento, ";
		$sql .= " col_codigo = 						:codigoColaborador, ";
		$sql .= " tab_codigo = 						:codigoStatus, ";
		$sql .= " set_codigo = 						:codigoSetor, ";
		$sql .= " vei_codigo = 						:codigoVeiculo ";
		$sql .= " WHERE equ_codigo =  				:codigoEquipamento ";

		$query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':codigoEquipamento', 		$objEquipamento->getCodigo(), 						PDO::PARAM_INT);
		$query->bindParam(':tacto', 					$objEquipamento->getTacto(), 						PDO::PARAM_STR);
        $query->bindParam(':tipoFrequencia', 			$objEquipamento->getTipoFrequencia(), 				PDO::PARAM_STR);
        $query->bindParam(':modelo', 					$objEquipamento->getModelo(), 						PDO::PARAM_STR);
        $query->bindParam(':numeroSerie', 				$objEquipamento->getNumeroSerie(), 					PDO::PARAM_STR);
        $query->bindParam(':dataVencimento', 			$objEquipamento->getDataVencimento(), 				PDO::PARAM_STR);
        $query->bindParam(':torque', 					$objEquipamento->getTorque(), 						PDO::PARAM_STR);
        $query->bindParam(':descricaoOperacao', 		$objEquipamento->getDescricaoOperacao(), 			PDO::PARAM_STR);
        $query->bindParam(':dataCalibragem', 			$objEquipamento->getDataCalibragem(), 				PDO::PARAM_STR);
        $query->bindParam(':dadosUtimaCalibragem', 		$objEquipamento->getDadosUtimaCalibragem(), 		PDO::PARAM_STR);
        $query->bindParam(':media', 					$objEquipamento->getMedia(), 						PDO::PARAM_STR);
        $query->bindParam(':dispersao', 				$objEquipamento->getDispersao(), 					PDO::PARAM_STR);
        $query->bindParam(':observacao', 				$objEquipamento->getObservacao(), 					PDO::PARAM_STR);
        $query->bindParam(':qtdDiasVencimento', 		$objEquipamento->getQtdDiasvencimento(), 			PDO::PARAM_INT);
        $query->bindParam(':codigoColaborador', 		$objEquipamento->getObjColaborador()->getCodigo(), 	PDO::PARAM_INT);
        $query->bindParam(':codigoStatus', 				$objEquipamento->getObjStatus()->getCodigo(), 		PDO::PARAM_INT);
        $query->bindParam(':codigoSetor', 				$objEquipamento->getObjSetor()->getCodigo(), 		PDO::PARAM_INT);
        $query->bindParam(':codigoVeiculo', 			$objEquipamento->getObjVeiculo()->getCodigo(), 		PDO::PARAM_INT);

		if (!$query->execute()) {
			$collectionErro = $query->errorInfo();
			throw new Exception("EquipamentoDAO->alterarEquipamento " . $collectionErro[2]);
		}
		return true;
    }

	public function excluirEquipamento($codigoEquipamento){

		$sql  = "DELETE FROM ";
		$sql .= "	gerenciador.tb_equipamento ";
		$sql .= " WHERE ";
		$sql .= "   equ_codigo = :codigoEquipamento ";

		$query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':codigoEquipamento', $codigoEquipamento, PDO::PARAM_INT);

		if (!$query->execute()) {
			$collectionErro = $query->errorInfo();
			throw new Exception("EquipamentoDAO->excluirEquipamento " . $collectionErro[2]);
		}
		return true;
	}

	public function listarEquipamentoPorVeiculo($codigoVeiculo){

		$collectionEquipamento = array();

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
		$sql .= " 	equ.equ_observacao, ";
		$sql .= " 	equ.equ_qtd_dias_vencimento, ";
		$sql .= " 	equ.col_codigo, ";
		$sql .= " 	equ.tab_codigo, ";
		$sql .= " 	equ.set_codigo, ";
		$sql .= " 	equ.vei_codigo, ";
		$sql .= " 	tab.tab_descricao ";
		$sql .= " FROM gerenciador.tb_equipamento AS equ ";
		$sql .= " LEFT JOIN gerenciador.tb_tabela_basica AS tab ON equ.tab_codigo = tab.tab_codigo ";
		$sql .= " WHERE equ.vei_codigo = :codigoVeiculo ";

        $query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':codigoVeiculo', $codigoVeiculo, PDO::PARAM_INT);

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

				$objEquipamento->setObjStatus(new TabelaBasica());
				$objEquipamento->getObjStatus()->setCodigo($rs['tab_codigo']);
				$objEquipamento->getObjStatus()->setDescricao($rs['tab_descricao']);

				$objEquipamento->setObjVeiculo(new Veiculo());
				$objEquipamento->getObjVeiculo()->setCodigo($rs['vei_codigo']);
				
				$objEquipamento->setObjSetor(new Setor());
				$objEquipamento->getObjSetor()->setCodigo($rs['set_codigo']);

                array_push($collectionEquipamento, $objEquipamento);
            }
        } else {
            $collectionErro = $query->errorInfo();
            throw new Exception("EquipamentoDAO->listarEquipamentoPorVeiculo " . $collectionErro[2]);
        }
        return $collectionEquipamento;
    }

	public function qtdEquipamentoPorVeiculo($codigoVeiculo, $statusEquipamento){
	

		$sql  = " SELECT ";
		$sql .= " 	count(equ.equ_codigo) as qtd_equipamento ";
		$sql .= " FROM gerenciador.tb_equipamento AS equ ";
		$sql .= " LEFT JOIN gerenciador.tb_tabela_basica AS tab ON equ.tab_codigo = tab.tab_codigo ";
		// $sql .= " WHERE equ.vei_codigo = :codigoVeiculo AND equ.tab_codigo = :statusEquipamento";
		
		$where = "";

		if($codigoVeiculo != ""){
			if ($where != "") {
                $where .= " AND ";
            }
 			$where .= " equ.vei_codigo = :codigoVeiculo ";
		}

		if($statusEquipamento != ""){
			if ($where != "") {
                $where .= " AND ";
            }
 			$where .= " equ.tab_codigo = :statusEquipamento ";
		}
		
		if ($where != "") {
            $sql .= " WHERE " . $where;
        }

        $query = parent::$connection->pdo->prepare($sql);
	
		if($codigoVeiculo){
			$query->bindParam(':codigoVeiculo', 		$codigoVeiculo, 		PDO::PARAM_INT);
		}
		if($statusEquipamento){
			$query->bindParam(':statusEquipamento', 	$statusEquipamento, 	PDO::PARAM_INT);
		}

		if ($query->execute()) {
            $rs = $query->fetch(PDO::FETCH_ASSOC);

            return $rs['qtd_equipamento'];
        } else {
            $collectionErro = $query->errorInfo();
            throw new Exception("EquipamentoDAO->qtdEquipamentoPorVeiculo " . $collectionErro[2]);
        }
	}
}