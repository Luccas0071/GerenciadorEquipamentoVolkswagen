<?php
include_once '../classes/factory/DAOFactory.php';
include_once '../classes/facade/ColaboradorFacade.php';
include_once '../classes/form/ColaboradorForm.php';
include_once '../classes/model/Colaborador.php';

class ColaboradorDAO extends DAOFactory{
    
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

	public function obterColaborador($codigoColaborador){

		$sql  = " SELECT ";
		$sql .= " col_codigo, ";
		$sql .= " col_nome,	";
		$sql .= " col_data_admissao, ";
		$sql .= " col_funcao ";
		$sql .= " FROM gerenciador.tb_colaborador ";
		$sql .= " WHERE col_codigo = :codigoColaborador ";
		
        $query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':codigoColaborador', 	$codigoColaborador, PDO::PARAM_STR);

		if ($query->execute()) {
            $rs = $query->fetch(PDO::FETCH_ASSOC);

			$objColaborador = new Colaborador();

			$objColaborador->setCodigo($rs['col_codigo']);
			$objColaborador->setNome($rs['col_nome']);
			$objColaborador->setDataAdmissao($rs['col_data_admissao']);
			$objColaborador->setFuncao($rs['col_funcao']);
        } else {
            $collectionErro = $query->errorInfo();
            throw new Exception("ColaboradorDAO->obterColaborador " . $collectionErro[2]);
        }
        return $objColaborador;
    }

	public function alterarColaborador($objColaborador){

		
		$sql = " UPDATE gerenciador.tb_colaborador SET  ";
		$sql .= " col_nome = 			:nome, ";
		$sql .= " col_data_admissao = 	:dataAdmissao, ";
		$sql .= " col_funcao = 			:funcao ";
		$sql .= " WHERE col_codigo =  	:codigoColaborador ";

		$query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':codigoColaborador', $objColaborador->getCodigo(), 		PDO::PARAM_INT);
		$query->bindParam(':nome', 				$objColaborador->getNome(), 		PDO::PARAM_STR);
        $query->bindParam(':dataAdmissao', 		$objColaborador->getDataAdmissao(), PDO::PARAM_STR);
        $query->bindParam(':funcao', 			$objColaborador->getFuncao(), 		PDO::PARAM_STR);
   

		if (!$query->execute()) {
			$collectionErro = $query->errorInfo();
			throw new Exception("ColaboradorDAO->alterarColaborador " . $collectionErro[2]);
		}
		return true;
    }

	public function excluirColaborador($codigoColaborador){

		$sql  = "DELETE FROM ";
		$sql .= "	gerenciador.tb_colaborador ";
		$sql .= " WHERE ";
		$sql .= "   col_codigo = :codigoColaborador ";

		$query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':codigoColaborador', $codigoColaborador, PDO::PARAM_INT);

		if (!$query->execute()) {
			$collectionErro = $query->errorInfo();
			throw new Exception("ColaboradorDAO->excluirColaborador " . $collectionErro[2]);
		}
		return true;
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