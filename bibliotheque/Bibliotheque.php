<?php 

class Bibliotheque{
     private $livres = [];

     public function __construct($livres)
     {
          $this->livres = $livres;
     }

     public function ajouter($livre){
          $this->livres[] = $livre;
     }

     public function getLivres(){return $this->livres;}

     public function setLivres($livres){
          $this->livres = $livres;
     }
}