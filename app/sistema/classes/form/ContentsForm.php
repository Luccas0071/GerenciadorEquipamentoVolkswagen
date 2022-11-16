<?php
include_once '../classes/model/Contents.php';

class ContentsForm {

    private $share;
    private $id;
    private $title;
    private $contents;
    private $creationDate;
    private $updateDate;
    private $module;

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

     
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

     
    public function getContents()
    {
        return $this->contents;
    }

    public function setContents($contents)
    {
        $this->contents = $contents;

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

     
    public function getModule()
    {
        return $this->module;
    }

    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }
    
   

    public function validate(){

    }

    public function transferRequestForm($request){
        $this->setShare($request['share']);
        $this->setId($request['idContents']);
        $this->setTitle($request['title']);
        $this->setContents($request['contents']);
        $this->setCreationDate($request['creationDate']);
        $this->setUpdateDate($request['updateDate']);
        $this->setModule($request['module']);

    }

    public function transferFormModel(){

        $objContents = new Contents();

        $objContents->setShare($this->getShare());
        $objContents->setId($this->getId());
        $objContents->setTitle($this->getName());
        $objContents->setEmail($this->getEmail());
        $objContents->setStatus($this->getStatus());
        $objContents->setCreationDate($this->getCreationDate());

        return $objContents;
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