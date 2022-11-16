<?php
include_once '../classes/factory/DAOFactory.php';
include_once '../classes/facade/ModuleFacade.php';
include_once '../classes/form/ModuleForm.php';
include_once '../classes/model/Module.php';

class ModuleDAO extends DAOFactory{
    
    public function includeCourse($objCourse){

		$sql = " INSERT INTO public.tb_course ";
        $sql .= " ( ";
		$sql .= " 	cou_unique_code, ";
		$sql .= " 	cou_title, ";
		$sql .= " 	cou_description, ";
		$sql .= " 	cou_creation_date, ";
		$sql .= " 	cou_update_date, ";
		$sql .= " 	use_id ";
        $sql .= " ) VALUES ( ";
        $sql .= " 	:uniqueCode, ";
        $sql .= " 	:title, ";
        $sql .= " 	:description, ";
		$sql .= " 	:creationDate, ";
		$sql .= " 	:updateDate, ";
		$sql .= " 	:user ";
        $sql .= " ) ";

        $query = parent::$connection->pdo->prepare($sql);

        $query->bindParam(':uniqueCode', 		$objCourse->getUniqueCode(), 		PDO::PARAM_INT);
		$query->bindParam(':title', 			$objCourse->getTitle(), 			PDO::PARAM_STR);
		$query->bindParam(':description', 		$objCourse->getDescription(), 	    PDO::PARAM_STR);
		$query->bindParam(':creationDate', 		$objCourse->getCreationDate(), 	    PDO::PARAM_STR);
		$query->bindParam(':updateDate', 		date('Y/m/d'), 	    				PDO::PARAM_STR);
		$query->bindParam(':user', 				$objCourse->getObjUser()->getId(), 	PDO::PARAM_INT);

        if (!$query->execute()) {
			$collectionErro = $query->errorInfo();
			throw new Exception("CourseDAO->includeCourse " . $collectionErro[2]);
		}
        return true;
    }

    public function listModule($idCourse){
        $collectionModule = array();

        $sql = " SELECT ";
		$sql .= "   mod.mod_id, ";
		$sql .= "   mod.mod_title, ";
		$sql .= "   mod.mod_description, ";
		$sql .= "   mod.mod_creation_date, ";
		$sql .= "   mod.mod_update_date, ";
		$sql .= "   mod.cou_id, ";
		$sql .= "   mod.use_id, ";
		$sql .= "   use.use_name ";
		$sql .= " FROM tb_Module as mod ";
		$sql .= " INNER JOIN tb_user as use ON use.use_id = mod.use_id ";
		$sql .= " WHERE cou_id = :idCourse ";
		$sql .= " ORDER BY mod_id  ";

        $query = parent::$connection->pdo->prepare($sql);

        $query->bindParam(':idCourse', $idCourse, PDO::PARAM_INT);

		if ($query->execute()) {
			while ($rs = $query->fetch(PDO::FETCH_ASSOC)) {

				$objModule = new Module();

				$objModule->setId($rs['mod_id']);
				$objModule->setTitle($rs['mod_title']);
				$objModule->setDescription($rs['mod_description']);
				$objModule->setCreationDate($rs['mod_creation_date']);
				$objModule->setUpdateDate($rs['mod_update_date']);

				$objModule->setObjCourse(new Course());
				$objModule->getObjCourse()->setId($rs['cou_id']);

				$objModule->setObjUser(new User());
				$objModule->getObjUser()->setId($rs['use_id']);
				$objModule->getObjUser()->setName($rs['use_name']);

				array_push($collectionModule, $objModule);
			}
		} else {
			$collectionErro = $query->errorInfo();
			throw new Exception("CourseDAO->listCourse " . $collectionErro[2]);
		}
		return $collectionModule;
    }

    public function getModuleInformation($code){
		
		$sql = " SELECT ";
		$sql .= " 	mod_id, ";
		$sql .= " 	mod_title, ";
		$sql .= " 	mod_description, ";
		$sql .= " 	mod_creation_date, ";
		$sql .= " 	mod_update_date, ";
		$sql .= " 	cou_id, ";
		$sql .= " 	use_id ";
		$sql .= " FROM public.tb_module  ";
		$sql .= " where mod_id = :code  ";

		$query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':code', $code, PDO::PARAM_INT);

		if ($query->execute()) {
			$rs = $query->fetch(PDO::FETCH_ASSOC);

			$objModule = new Module();

			$objModule->setId($rs['mod_id']);
			$objModule->setTitle($rs['mod_title']);
			$objModule->setDescription($rs['mod_description']);
			$objModule->setCreationDate($rs['mod_creation_date']);
			$objModule->setUpdateDate($rs['mod_update_date']);

			$objModule->setObjCourse(new Course());
			$objModule->getObjCourse()->setId($rs['cou_id']);

			$objModule->setObjUser(new User());
			$objModule->getObjUser()->setId($rs['use_id']);

		} else {
			$collectionErro = $query->errorInfo();
			throw new Exception("CourseDAO->getCourseInformation " . $collectionErro[2]);
		}
		return $objModule;
	}

    public function changeCourse($objCourse){

		$sql = " UPDATE public.tb_course SET  ";
		$sql .= " cou_unique_code = 	:uniqueCode, ";
		$sql .= " cou_title = 			:title, ";
		$sql .= " cou_description = 	:description, ";
		$sql .= " cou_creation_date = 	:creationDate, ";
		$sql .= " cou_update_date = 	:updateDate, ";
		$sql .= " use_id = 				:user ";
		$sql .= " WHERE cou_id =  		:idCourse ";

		$query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':idCourse', 			$objCourse->getId(), 				PDO::PARAM_INT);
		$query->bindParam(':uniqueCode', 		$objCourse->getUniqueCode(), 		PDO::PARAM_STR);
		$query->bindParam(':title', 			$objCourse->getTitle(), 		    PDO::PARAM_STR);
		$query->bindParam(':description', 		$objCourse->getDescription(), 		PDO::PARAM_STR);
		$query->bindParam(':creationDate', 		$objCourse->getCreationDate(), 	    PDO::PARAM_STR);
		$query->bindParam(':updateDate', 		date('Y/m/d'), 	    				PDO::PARAM_STR);
		$query->bindParam(':user', 				$objCourse->getObjUser()->getId(), 	PDO::PARAM_INT);

		if (!$query->execute()) {
			$collectionErro = $query->errorInfo();
			throw new Exception("CursoDAO->alterarCurso " . $collectionErro[2]);
		}
		return true;
	}

    public function deleteCourse($id)
	{

		$sql  = "DELETE FROM public.tb_course ";
		$sql .= "WHERE cou_id = :id ";

		$query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':id', $id, PDO::PARAM_INT);

		if (!$query->execute()) {
			$collectionErro = $query->errorInfo();
			throw new Exception("CursoDAO->excluirCurso " . $collectionErro[2]);
		}
		return true;
	}





}