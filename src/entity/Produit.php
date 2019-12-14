<?php
class Produit
{
    private $ref;
    private $lib;
    private $qte;
    private $prix;

    public function __construct()
    {

    }
    public function getRef()
    {
        return $this->ref;
    }
    public function getLib()
    {
        return $this->lib;
    }
    public function getQte()
    {
        return $this->qte;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function setRef($ref)
    {
        $this->ref = $ref;
    }
    public function setLib($lib)
    {
        $this->lib = $lib;
    }
    public function setQte($qte)
    {
        $this->qte = $qte;
    }
    
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
    
}