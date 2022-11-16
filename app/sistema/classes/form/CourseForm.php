<?php

include_once '../classes/model/Course.php';

class CourseForm {

    private $share;
    private $id;
    private $uniqueCode;
    private $title;
    private $description;
    private $creationDate;
    private $updateDate;
    private $user;
 
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
 
    public function getUniqueCode()
    {
        return $this->uniqueCode;
    }

    public function setUniqueCode($uniqueCode)
    {
        $this->uniqueCode = $uniqueCode;

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
 
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;

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
 
    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function validate($request){

    }
    
    public function transferRequestForm($request){

        $this->setShare($request['share']);
        $this->setId($request['idCourse']);
        $this->setUniqueCode($request['uniqueCode']);
        $this->setTitle($request['title']);
        $this->setDescription($request['description']);
        $this->setCreationDate($request['creationDate']);
        $this->setUser($request['user']);
    }

    public function transferFormModel(){

        $objCourse = new Course();

        $objCourse->setShare($this->getShare());
        $objCourse->setId($this->getId());
        $objCourse->setUniqueCode($this->getUniqueCode());
        $objCourse->setTitle($this->getTitle());
        $objCourse->setDescription($this->getDescription());
        $objCourse->setCreationDate($this->getCreationDate());
        $objCourse->setUpdateDate($this->getUpdateDate());

        $objCourse->setObjUser(new User());
        $objCourse->getObjUser()->setId($this->getUser());

        return $objCourse;
    }

    public function transferModelForm($objCourse){

        $this->setShare($objCourse->getShare());
        $this->setId($objCourse->getId());
        $this->setUniqueCode($objCourse->getUniqueCode());
        $this->setTitle($objCourse->getTitle());
        $this->setDescription($objCourse->getDescription());
        $this->setCreationDate($objCourse->getCreationDate());
        $this->setUpdateDate($objCourse->getUpdateDate());
        $this->setUser($objCourse->getObjUser()->getId());

        return $this;
    }



    
 
    


   
}