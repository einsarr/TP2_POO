<?php
require_once "Article.php";
class Montre extends Article
{
    private $nature;
    public function getNature()
    {
        return $this->nature;
    }
    public function setNature($nature)
    {
        $this->nature = $nature;
    }
}