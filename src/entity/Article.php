<?php
class Article
{
    protected $id;
    private $lib;
    public function __construct()
    {
        
    }
    public function getId()
    {
        return $this->id;
    }
    public function getLib()
    {
        return $this->lib;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setLib($lib)
    {
        $this->lib = $lib;
    }
}