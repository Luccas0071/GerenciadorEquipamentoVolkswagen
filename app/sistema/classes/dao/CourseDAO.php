<?php
include_once '../classes/factory/DAOFactory.php';
include_once '../classes/facade/CourseFacade.php';
include_once '../classes/form/CourseForm.php';
include_once '../classes/model/Course.php';

class CourseDAO extends DAOFactory{
    
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

    public function listCourse(){

        $collectionCourse = array();

		$sql = " SELECT ";
		$sql .= " 	cou.cou_id, ";
		$sql .= " 	cou.cou_unique_code, ";
		$sql .= " 	cou.cou_title, ";
		$sql .= " 	cou.cou_description, ";
		$sql .= " 	cou.cou_creation_date, ";
		$sql .= " 	cou.cou_update_date, ";
		$sql .= " 	cou.use_id, ";
		$sql .= " 	use.use_name ";
		$sql .= " FROM tb_course as cou ";
		$sql .= " INNER JOIN tb_user as use ON use.use_id = cou.use_id ";
		$sql .= " ORDER BY cou_id ";

        $query = parent::$connection->pdo->prepare($sql);

		if ($query->execute()) {
			while ($rs = $query->fetch(PDO::FETCH_ASSOC)) {

				$objCourse = new Course();

				$objCourse->setId($rs['cou_id']);
				$objCourse->setUniqueCode($rs['cou_unique_code']);
				$objCourse->setTitle($rs['cou_title']);
				$objCourse->setDescription($rs['cou_description']);
				$objCourse->setObjUser(new User());
				$objCourse->getObjUser()->setName($rs['use_name']);

				array_push($collectionCourse, $objCourse);
			}
		} else {
			$collectionErro = $query->errorInfo();
			throw new Exception("CourseDAO->listCourse " . $collectionErro[2]);
		}
		return $collectionCourse;
    }

    public function getCourseInformation($code){
		

		$sql = " SELECT  ";
		$sql .= " 	cou_id, ";
		$sql .= " 	cou_unique_code, ";
		$sql .= " 	cou_title, ";
		$sql .= " 	cou_description, ";
		$sql .= " 	cou_creation_date, ";
		$sql .= " 	cou_update_date, ";
		$sql .= " 	use_id ";
		$sql .= " FROM public.tb_course ";
		$sql .= " where cou_id = :code  ";

		$query = parent::$connection->pdo->prepare($sql);

		$query->bindParam(':code', $code, PDO::PARAM_INT);

		if ($query->execute()) {
			$rs = $query->fetch(PDO::FETCH_ASSOC);

			$objCourse = new Course();

			$objCourse->setId($rs['cou_id']);
			$objCourse->setUniqueCode($rs['cou_unique_code']);
			$objCourse->setTitle($rs['cou_title']);
			$objCourse->setDescription($rs['cou_description']);
			$objCourse->setCreationDate($rs['cou_creation_date']);
			$objCourse->setUpdateDate($rs['cou_update_date']);

			$objCourse->setObjUser(new User());
			$objCourse->getObjUser()->setId($rs['use_id']);

		} else {
			$collectionErro = $query->errorInfo();
			throw new Exception("CourseDAO->getCourseInformation " . $collectionErro[2]);
		}
		return $objCourse;
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