<?php
include_once '../classes/factory/DAOFactory.php';
include_once '../classes/facade/UserFacade.php';
include_once '../classes/form/UserForm.php';
include_once '../classes/model/User.php';

class UserDAO extends DAOFactory{

	// public function listarItemTabelaBasica($codigo){

    //     $colectionCargo = array();

	// 	$sql = " SELECT ";
	// 	$sql .= " 	tab_codigo, ";
	// 	$sql .= " 	tab_descricao, ";
	// 	$sql .= " 	tab_tipo ";
	// 	$sql .= " FROM mm_tech.tb_tabela_basica ";
	// 	$sql .= " WHERE tab_tipo = :codigoTipo ";
	// 	$sql .= " ORDER BY tab_ordem ";

    //     $query = parent::$connection->pdo->prepare($sql);

	// 	$query->bindParam(':codigoTipo', $codigo, PDO::PARAM_INT);

	// 	if ($query->execute()) {
	// 		while ($rs = $query->fetch(PDO::FETCH_ASSOC)) {

	// 			$objTabelaBasica = new TabelaBasica();

	// 			$objTabelaBasica->setCodigo($rs['tab_codigo']);
	// 			$objTabelaBasica->setDescricao($rs['tab_descricao']);
	// 			$objTabelaBasica->setTipo($rs['tab_tipo']);

	// 			array_push($colectionCargo, $objTabelaBasica);
	// 		}
	// 	} else {
	// 		$collectionErro = $query->errorInfo();
	// 		throw new Exception("TabelaBasicaDAO->listaTabelaBasica " . $collectionErro[2]);
	// 	}
	// 	return $colectionCargo;
    // }

	public function listUser(){
        $collectionUser = array();

		$sql = " SELECT ";
		$sql .= " 	use_id, ";
		$sql .= "	use_name, ";
		$sql .= "	use_email, ";
		$sql .= "	use_status, ";
		$sql .= "	use_creation_date, ";
		$sql .= "	use_update_date ";
		$sql .= " FROM tb_user ";
		$sql .= " ORDER BY use_id ";

        $query = parent::$connection->pdo->prepare($sql);

		if ($query->execute()) {
			while ($rs = $query->fetch(PDO::FETCH_ASSOC)) {

				$objUser = new User();

				$objUser->setid($rs['use_id']);
				$objUser->setName($rs['use_name']);
				$objUser->setEmail($rs['use_email']);
				$objUser->setStatus($rs['use_status']);
				$objUser->setCreationDate($rs['use_creation_date']);
				$objUser->setUpdateDate($rs['use_update_date']);

				array_push($collectionUser, $objUser);
			}
		} else {
			$collectionErro = $query->errorInfo();
			throw new Exception("UserDAO->listUser " . $collectionErro[2]);
		}
		return $collectionUser;
    }

	public function getUserInformation($code){

		$sql = " SELECT  ";
		$sql .= " 	use_id, ";
		$sql .= " 	use_name, ";
		$sql .= " 	use_email, ";
		$sql .= " 	use_status, ";
		$sql .= " 	use_creation_date, ";
		$sql .= " 	use_update_date ";
		$sql .= " FROM public.tb_user  ";
		$sql .= " WHERE use_id = :code  ";
		$sql .= " ORDER BY use_id  ";

        $query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':code', $code, PDO::PARAM_INT);

		if ($query->execute()) {
			while ($rs = $query->fetch(PDO::FETCH_ASSOC)) {

				$objUser = new User();

				$objUser->setId($rs['use_id']);
				$objUser->setName($rs['use_name']);
				$objUser->setEmail($rs['use_email']);
				$objUser->setStatus($rs['use_status']);
				$objUser->setCreationDate($rs['use_creation_date']);
				$objUser->setUpdateDate($rs['use_update_date']);
			}
		} else {
			$collectionErro = $query->errorInfo();
			throw new Exception("UserDAO->getUserInformation " . $collectionErro[2]);
		}

		return $objUser;
    }

	public function includeUser($objUser){

		$sql = " INSERT INTO public.tb_user ";
		$sql .= " (  ";
		$sql .= " 	use_name, ";
		$sql .= " 	use_email, ";
		$sql .= " 	use_status, ";
		$sql .= " 	use_creation_date ";
		$sql .= " ) VALUES (  ";
		$sql .= " 	:name, ";
		$sql .= " 	:email, ";
		$sql .= " 	:status, ";
		$sql .= " 	:creationDate ";
		$sql .= " ) ";

		$query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':name', 				$objUser->getName(), 		    PDO::PARAM_STR);
		$query->bindParam(':email', 			$objUser->getEmail(), 			PDO::PARAM_STR);
		$query->bindParam(':status', 			$objUser->getStatus(), 	    	PDO::PARAM_STR);
		$query->bindParam(':creationDate', 		$objUser->getCreationDate(), 	PDO::PARAM_STR);
		
		if (!$query->execute()) {
			$collectionErro = $query->errorInfo();
			throw new Exception("UserDAO->includeUser " . $collectionErro[2]);
		}
	}

	public function changeUser($objUser){

		$sql = " UPDATE public.tb_user SET ";
		$sql .= " use_name = 			:name, ";
		$sql .= " use_email = 			:email, ";
		$sql .= " use_status = 			:status, ";
		$sql .= " use_creation_date = 	:creationDate ";
		$sql .= " WHERE use_id = 		:idUser ";

		$query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':idUser', 		$objUser->getId(), 		    	PDO::PARAM_INT);
		$query->bindParam(':name', 			$objUser->getName(), 		    PDO::PARAM_STR);
		$query->bindParam(':email', 		$objUser->getEmail(), 			PDO::PARAM_STR);
		$query->bindParam(':status', 		$objUser->getStatus(), 	    	PDO::PARAM_STR);
		$query->bindParam(':creationDate', 	$objUser->getCreationDate(), 	PDO::PARAM_STR);
		
		if (!$query->execute()) {
			$collectionErro = $query->errorInfo();
			throw new Exception("UserDAO->changeUser " . $collectionErro[2]);
		}
	}
	
	public function deleteUser($id){

		$sql = " DELETE FROM public.tb_user ";
		$sql .= " WHERE use_id = :id ";

		$query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':id', $id, PDO::PARAM_INT);

		if (!$query->execute()) {
			$collectionErro = $query->errorInfo();
			throw new Exception("UserDAO->deleteUser " . $collectionErro[2]);
		}
		return true;
	}



	// public function incluirItemCurso($objItemCurso, $codigoColaborador){

	// 	$sql = " INSERT INTO mm_tech.tb_item_colaborador_curso ";
	// 	$sql .= " (  ";
	// 	$sql .= " 	icc_data_conclusao, ";
	// 	$sql .= " 	icc_remuneracao, ";
	// 	$sql .= " 	icc_observacao, ";
	// 	$sql .= " 	cur_codigo, ";
	// 	$sql .= " 	fun_codigo ";
	// 	$sql .= " ) VALUES (  ";
	// 	$sql .= " 	:dataConclusao, ";
	// 	$sql .= " 	:remuneracao, ";
	// 	$sql .= " 	:observacao, ";
	// 	$sql .= " 	:codigoCurso, ";
	// 	$sql .= " 	:codigoFuncionario ";
	// 	$sql .= " ) ";

	// 	$query = parent::$connection->pdo->prepare($sql);

	// 	$query->bindParam(':dataConclusao', 		$objItemCurso->getDataConclusao(), 			PDO::PARAM_STR);
	// 	$query->bindParam(':remuneracao', 			$objItemCurso->getValorRemuneracao(),  		PDO::PARAM_STR);
	// 	$query->bindParam(':observacao', 			$objItemCurso->getObservacao(), 			PDO::PARAM_STR);
	// 	$query->bindParam(':codigoCurso', 			$objItemCurso->getObjCurso()->getCodigo(), 	PDO::PARAM_INT);
	// 	$query->bindParam(':codigoFuncionario', 	$codigoColaborador, 						PDO::PARAM_INT);

	// 	if ($query->execute()) {
	// 		$query->fetch(PDO::FETCH_ASSOC);
	// 	} else {
	// 		$collectionErro = $query->errorInfo();
	// 		throw new Exception("ColaboradorDAO->incluirColaborador " . $collectionErro[2]);
	// 	}
		
	// }

	// public function listarItemColaborador($codigoColaborador){

	// 	$sql = " SELECT ";
	// 	$sql .= " 	icc_codigo, ";
	// 	$sql .= " 	icc_data_conclusao, ";
	// 	$sql .= " 	icc_remuneracao, ";
	// 	$sql .= " 	icc_observacao, ";
	// 	$sql .= " 	cur_codigo, ";
	// 	$sql .= " 	fun_codigo ";
	// 	$sql .= " FROM mm_tech.tb_item_colaborador_curso ";
	// 	$sql .= " WHERE fun_codigo = :codigoColaborador ";
	// 	$sql .= " ORDER BY icc_codigo ";

	// 	$query = parent::$connection->pdo->prepare($sql);

	// 	$query->bindParam(":codigoColaborador", $codigoColaborador, PDO::PARAM_INT);

	// 	$collectionItemColaborador = array();
	// 	if ($query->execute()) {
	// 		while ($rs = $query->fetch(PDO::FETCH_ASSOC)) {
	// 			$objItemColaboradorCurso = new ItemColaboradorCurso();

	// 			$objItemColaboradorCurso->setCodigo($rs['icc_codigo']);
	// 			$objItemColaboradorCurso->setDataConclusao($rs['icc_data_conclusao']);
	// 			$objItemColaboradorCurso->setValorRemuneracao($rs['icc_remuneracao']);
	// 			$objItemColaboradorCurso->setObservacao($rs['icc_observacao']);

	// 			$objItemColaboradorCurso->setObjCurso(new Curso());
	// 			$objItemColaboradorCurso->getObjCurso()->setCodigo($rs['cur_codigo']);

	// 			array_push($collectionItemColaborador, $objItemColaboradorCurso);
	// 		}
	// 	} else {
	// 		$collectionErro = $query->errorInfo();
	// 		throw new Exception("ColaboradorDAO->listarItemColaborador" . $collectionErro[2]);
	// 	}
	// 	return $collectionItemColaborador;
		
	// }
}

    

