<?php
include_once '../classes/factory/DAOFactory.php';
include_once '../classes/facade/InicioFacade.php';
include_once '../classes/model/Planilha.php';

class InicioDAO extends DAOFactory{

	public function listarDadosPlanilha(){

        $collectionPlanilha = array();

		$sql = " SELECT  ";
		$sql .= " 	pla_codigo, ";
		$sql .= " 	pla_tacto, ";
		$sql .= " 	pla_tipo_frequencia, ";
		$sql .= " 	pla_modelo, ";
		$sql .= " 	pla_numero_serie, ";
		$sql .= " 	pla_venciamento, ";
		$sql .= " 	pla_status, ";
		$sql .= " 	pla_torque, ";
		$sql .= " 	pla_descricao_operacao_carro, ";
		$sql .= " 	pla_tecnico, ";
		$sql .= " 	pla_data_calibracao, ";
		$sql .= " 	pla_dados_ultima_calibracao, ";
		$sql .= " 	pla_media, ";
		$sql .= " 	pla_dispersao, ";
		$sql .= " 	pla_observacao ";
		$sql .= " FROM gerenciador.tb_dados_planilha ";

        $query = parent::$connection->pdo->prepare($sql);

		if ($query->execute()) {
			while ($rs = $query->fetch(PDO::FETCH_ASSOC)) {

				$objPlanilha = new Planilha();

				$objPlanilha->setCodigo($rs['pla_codigo']);
				$objPlanilha->setTacto($rs['pla_tacto']);
				$objPlanilha->setTipoFrequencia($rs['pla_tipo_frequencia']);
				$objPlanilha->setModelo($rs['pla_modelo']);
				$objPlanilha->setNumeroSerie($rs['pla_numero_serie']);
				$objPlanilha->setVenciamento($rs['pla_venciamento']);
				$objPlanilha->setStatus($rs['pla_status']);
				$objPlanilha->setTorque($rs['pla_torque']);
				$objPlanilha->setDescricaoOperacaoCarro($rs['pla_descricao_operacao_carro']);
				$objPlanilha->setTecnico($rs['pla_tecnico']);
				$objPlanilha->setDataCalibracao($rs['pla_data_calibracao']);
				$objPlanilha->setDadosUltimaCalibracao($rs['pla_dados_ultima_calibracao']);
				$objPlanilha->setMedia($rs['pla_media']);
				$objPlanilha->setDispersao($rs['pla_dispersao']);
				$objPlanilha->setObservaca($rs['pla_observacao']);

				array_push($collectionPlanilha, $objPlanilha);
			}
		} else {
			$collectionErro = $query->errorInfo();
			throw new Exception("InicioDAO->listarDadosPlanilha " . $collectionErro[2]);
		}

		return $collectionPlanilha;
    }



	/* public function listarColaborador(){

        require_once "../database/connectDatabase.php";
        
        $colectionColaborador = array();

		$sql = " SELECT  ";
		$sql .= " 	fun_codigo, ";
		$sql .= " 	fun_nome, ";
		$sql .= " 	fun_cpf, ";
		$sql .= " 	fun_rg, ";
		$sql .= " 	fun_data_nascimento, ";
		$sql .= " 	fun_ddd_telefone, ";
		$sql .= " 	fun_telefone, ";
		$sql .= " 	fun_ddd_celular, ";
		$sql .= " 	fun_celular, ";
		$sql .= " 	fun_email, ";
		$sql .= " 	fun_salario, ";
		$sql .= " 	fun_cep, ";
		$sql .= " 	fun_rua, ";
		$sql .= " 	fun_numero, ";
		$sql .= " 	fun_bairro, ";
		$sql .= " 	fun_complemento, ";
		$sql .= " 	fun_uf, ";
		$sql .= " 	fun_municipio ";
		$sql .= " FROM mm_tech.tb_funcionario ";
		$sql .= " ORDER BY fun_codigo ";

        $query = $pdo->prepare($sql);

		if ($query->execute()) {
			while ($rs = $query->fetch(PDO::FETCH_ASSOC)) {

				$objColaborador = new Colaborador();

				$objColaborador->setCodigo($rs['fun_codigo']);
				$objColaborador->setNome($rs['fun_nome']);
				$objColaborador->setCpf($rs['fun_cpf']);
				$objColaborador->setRg($rs['fun_rg']);
				$objColaborador->setDataNascimento($rs['fun_data_nascimento']);
				$objColaborador->setDddTelefone($rs['fun_ddd_telefone']);
				$objColaborador->setTelefone($rs['fun_telefone']);
				$objColaborador->setDddCelular($rs['fun_ddd_celular']);
				$objColaborador->setCelular($rs['fun_celular']);
				$objColaborador->setEmail($rs['fun_email']);
				$objColaborador->setSalario($rs['fun_salario']);

				$objColaborador->setObjEndereco(new Endereco());
				$objColaborador->getObjEndereco()->setCep($rs['fun_cep']);
				$objColaborador->getObjEndereco()->setRua($rs['fun_rua']);
				$objColaborador->getObjEndereco()->setNumero($rs['fun_numero']);
				$objColaborador->getObjEndereco()->setBairro($rs['fun_bairro']);
				$objColaborador->getObjEndereco()->setComplemento($rs['fun_complemento']);
				$objColaborador->getObjEndereco()->setUf($rs['fun_uf']);
				$objColaborador->getObjEndereco()->setMunicipio($rs['fun_municipio']);
				
				array_push($colectionColaborador, $objColaborador);
			}
		} else {
			$collectionErro = $query->errorInfo();
			throw new Exception("ColaboradorDAO->listaColaborador " . $collectionErro[2]);
		}
		return $colectionColaborador;
    } */ 
	

/* INSERT INTO mm_tech.tb_funcionario 
		  ( 
			fun_nome,
			fun_cpf,
			fun_rg,
			fun_data_nascimento,
			fun_ddd_telefone,
			fun_telefone,
			fun_ddd_celular,
			fun_celular,
			fun_email,
			fun_salario,
			fun_cep,
			fun_rua,
			fun_numero,
			fun_bairro,
			fun_complemento,
			fun_uf,
			fun_municipio
		 ) 
		 VALUES 
		 ( 
			'nome', 
			'09396848964', 
			'1315215241', 
			'29-01-1997', 
			'41', 
			'33825810', 
			'41', 
			'988866412', 
			'lucas@gmail.com', 
			1.000, 
			'83055320', 
			'rua pedro karwowski', 
			'45', 
			'Guatupe', 
			'complemento', 
			'PR', 
			'São Jose dos Pinhais'
		 )  */
}

    

