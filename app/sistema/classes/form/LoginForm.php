<?php
include_once '../classes/model/Login.php';

class LoginForm {

    private $codigo;
    private $login;
    private $senha;
	private $nome;
    private $dddfone;
    private $fone;
    private $email;

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }
 
    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }
 
    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }
 
	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}
 
    public function getDddfone()
    {
        return $this->dddfone;
    }

    public function setDddfone($dddfone)
    {
        $this->dddfone = $dddfone;

        return $this;
    }
 
    public function getFone()
    {
        return $this->fone;
    }

    public function setFone($fone)
    {
        $this->fone = $fone;

        return $this;
    }
 
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    
    public function transferRequestForm($request){
        $this->setlogin($request['name']);
        $this->setSenha($request['password']);
    }

    public function transferFormModel(){

        $objLogin = new Login();

        $objLogin->setlogin($this->getlogin());
        $objLogin->setSenha($this->getSenha());

        return $objLogin;
    }

    public function transferModelForm($objModule){

        // $this->setShare($objModule->getShare());
        // $this->setId($objModule->getId());
        // $this->setTitle($objModule->getTitle());
        // $this->setDescription($objModule->getDescription());
        // $this->setCreationDate($objModule->getCreationDate());
        // $this->setUpdateDate($objModule->getUpdateDate());
        // $this->setCourse($objModule->getObjCourse()->getId());
        // $this->setUser($objModule->getObjUser()->getId());

        // return $this;
    }

    
}