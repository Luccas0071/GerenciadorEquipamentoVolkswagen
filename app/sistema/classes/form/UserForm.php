<?php
include_once '../classes/model/User.php';

class UserForm {

    private $share;
    private $id;
    private $name;
    private $email;
    private $status;
    private $creationDate;
    private $updateDate;
 
    public function getShare()
    {
        return $this->share;
    }

    public function setShare($share)
    {
        $this->share = $share;

        return $this;
    }

     
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

     
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

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

     
    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

     
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

     
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    public function validate(){

    }

    public function transferRequestForm($request){
        
        $this->setShare($request['share']);
        $this->setId($request['idUser']);
        $this->setName($request['name']);
        $this->setEmail($request['email']);
        $this->setStatus($request['status']);
        $this->setCreationDate($request['creationDate']);

    }

    public function transferFormModel(){

        $objUser = new User();

        $objUser->setShare($this->getShare());
        $objUser->setId($this->getId());
        $objUser->setName($this->getName());
        $objUser->setEmail($this->getEmail());
        $objUser->setStatus($this->getStatus());
        $objUser->setCreationDate($this->getCreationDate());

        return $objUser;
    }

    public function transferModelForm($objUser){

        $this->setShare($objUser->getShare());
        $this->setId($objUser->getId());
        $this->setName($objUser->getName());
        $this->setEmail($objUser->getEmail());
        $this->setStatus($objUser->getStatus());
        $this->setCreationDate($objUser->getCreationDate());
        $this->setUpdateDate($objUser->getUpdateDate());

        return $this;
    }

   

     
    
}