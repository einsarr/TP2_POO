<?php
require_once "Article.php";
class Chemise extends Article
{
    private $couture;
    public function getCouture()
    {
        return $this->couture;
    }
    public function setCouture($couture)
    {
        $this->couture = $couture;
    }
}