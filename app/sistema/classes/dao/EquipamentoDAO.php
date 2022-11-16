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

    // public function listContents($idModule){
    //     $collectionContents = array();

	// 	$sql = " SELECT  ";
	// 	$sql .= " 	con.con_id, ";
	// 	$sql .= " 	con.con_title, ";
	// 	$sql .= " 	con.con_contents, ";
	// 	$sql .= " 	con.con_create_date, ";
	// 	$sql .= " 	con.con_update_date, ";
	// 	$sql .= " 	con.mod_id, ";
	// 	$sql .= " 	use.use_name ";
	// 	$sql .= " FROM tb_contents as con ";
	// 	$sql .= " INNER JOIN tb_module as mod ON mod.mod_id = con.mod_id ";
	// 	$sql .= " INNER JOIN tb_course as cou ON cou.cou_id = mod.cou_id ";
	// 	$sql .= " INNER JOIN tb_user as use ON use.use_id = cou.use_id ";
	// 	$sql .= " WHERE con.mod_id = :idModule  ";
	// 	$sql .= " ORDER BY con_id  ";

    //     $query = parent::$connection->pdo->prepare($sql);

    //     $query->bindParam(':idModule', $idModule, PDO::PARAM_INT);

	// 	if ($query->execute()) {
	// 		while ($rs = $query->fetch(PDO::FETCH_ASSOC)) {

	// 			$objContents = new Contents();

	// 			$objContents->setId($rs['con_id']);
	// 			$objContents->setTitle($rs['con_title']);
	// 			$objContents->setContents($rs['con_contents']);
	// 			$objContents->setCreationDate($rs['con_create_date']);
	// 			$objContents->setUpdateDate($rs['con_update_date']);

	// 			$objContents->setObjModule(new Module());
	// 			$objContents->getObjModule()->setId($rs['mod_id']);
	// 			$objContents->getObjModule()->setObjUser(new User());
	// 			$objContents->getObjModule()->getObjUser()->setName($rs['use_name']);

	// 			array_push($collectionContents, $objContents);
	// 		}
	// 	} else {
	// 		$collectionErro = $query->errorInfo();
	// 		throw new Exception("CourseDAO->listCourse " . $collectionErro[2]);
	// 	}
	// 	return $collectionContents;
    // }

    // public function getCourseInformation($code){
		

	// 	$sql = " SELECT  ";
	// 	$sql .= " 	cou_id, ";
	// 	$sql .= " 	cou_unique_code, ";
	// 	$sql .= " 	cou_title, ";
	// 	$sql .= " 	cou_description, ";
	// 	$sql .= " 	cou_creation_date, ";
	// 	$sql .= " 	cou_update_date, ";
	// 	$sql .= " 	use_id ";
	// 	$sql .= " FROM public.tb_course ";
	// 	$sql .= " where cou_id = :code  ";

	// 	$query = parent::$connection->pdo->prepare($sql);

	// 	$query->bindParam(':code', $code, PDO::PARAM_INT);

	// 	if ($query->execute()) {
	// 		$rs = $query->fetch(PDO::FETCH_ASSOC);

	// 		$objCourse = new Course();

	// 		$objCourse->setId($rs['cou_id']);
	// 		$objCourse->setUniqueCode($rs['cou_unique_code']);
	// 		$objCourse->setTitle($rs['cou_title']);
	// 		$objCourse->setDescription($rs['cou_description']);
	// 		$objCourse->setCreationDate($rs['cou_creation_date']);
	// 		$objCourse->setUpdateDate($rs['cou_update_date']);

	// 		$objCourse->setObjUser(new User());
	// 		$objCourse->getObjUser()->setId($rs['use_id']);

	// 	} else {
	// 		$collectionErro = $query->errorInfo();
	// 		throw new Exception("CourseDAO->getCourseInformation " . $collectionErro[2]);
	// 	}
	// 	return $objCourse;
	// }

    // public function changeCourse($objCourse){

	// 	$sql = " UPDATE public.tb_course SET  ";
	// 	$sql .= " cou_unique_code = 	:uniqueCode, ";
	// 	$sql .= " cou_title = 			:title, ";
	// 	$sql .= " cou_description = 	:description, ";
	// 	$sql .= " cou_creation_date = 	:creationDate, ";
	// 	$sql .= " cou_update_date = 	:updateDate, ";
	// 	$sql .= " use_id = 				:user ";
	// 	$sql .= " WHERE cou_id =  		:idCourse ";

	// 	$query = parent::$connection->pdo->prepare($sql);

	// 	$query->bindParam(':idCourse', 			$objCourse->getId(), 				PDO::PARAM_INT);
	// 	$query->bindParam(':uniqueCode', 		$objCourse->getUniqueCode(), 		PDO::PARAM_STR);
	// 	$query->bindParam(':title', 			$objCourse->getTitle(), 		    PDO::PARAM_STR);
	// 	$query->bindParam(':description', 		$objCourse->getDescription(), 		PDO::PARAM_STR);
	// 	$query->bindParam(':creationDate', 		$objCourse->getCreationDate(), 	    PDO::PARAM_STR);
	// 	$query->bindParam(':updateDate', 		date('Y/m/d'), 	    				PDO::PARAM_STR);
	// 	$query->bindParam(':user', 				$objCourse->getObjUser()->getId(), 	PDO::PARAM_INT);

	// 	if (!$query->execute()) {
	// 		$collectionErro = $query->errorInfo();
	// 		throw new Exception("CursoDAO->alterarCurso " . $collectionErro[2]);
	// 	}
	// 	return true;
	// }

    // public function deleteCourse($id)
	// {

	// 	$sql  = "DELETE FROM public.tb_course ";
	// 	$sql .= "WHERE cou_id = :id ";

	// 	$query = parent::$connection->pdo->prepare($sql);

	// 	$query->bindParam(':id', $id, PDO::PARAM_INT);

	// 	if (!$query->execute()) {
	// 		$collectionErro = $query->errorInfo();
	// 		throw new Exception("CursoDAO->excluirCurso " . $collectionErro[2]);
	// 	}
	// 	return true;
	// }





}