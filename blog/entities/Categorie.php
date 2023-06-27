<?php

class Categorie{
     private $libelle;

     public function __construct($libelle = null)
     {
          $this->libelle = $libelle;
     }

     public function getLibelle(){
          return $this->libelle;
     }

     public function setLibelle($libelle){
          $this->libelle = $libelle;
     }

}