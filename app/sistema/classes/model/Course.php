<?php

class Course{

    private $share;
    private $id;
    private $uniqueCode;
    private $title;
    private $description;
    private $creationDate;
    private $updateDate;
    private $objUser;
 
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
 
    public function getObjUser()
    {
        return $this->objUser;
    }

    public function setObjUser($objUser)
    {
        $this->objUser = $objUser;

        return $this;
    }
}