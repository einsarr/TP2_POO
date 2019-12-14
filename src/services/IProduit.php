<?php
require_once "../entity/Produit.php";
interface IProduit
{
    public function saisie();
    public function affiche(Produit $produit);
}