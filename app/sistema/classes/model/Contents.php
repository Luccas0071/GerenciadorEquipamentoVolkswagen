<?php

class Contents{
    
    private $share;
    private $id;
    private $title;
    private $contents;
    private $creationDate;
    private $updateDate;
    private $objModule;

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

    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    
    public function getObjModule()
    {
        return $this->objModule;
    }

    public function setObjModule($objModule)
    {
        $this->objModule = $objModule;

        return $this;
    }

    public function getShare()
    {
        return $this->share;
    }

    public function setShare($share)
    {
        $this->share = $share;

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
}