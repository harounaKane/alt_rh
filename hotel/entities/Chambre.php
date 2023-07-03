<?php

class Chambre {
     private $numChambre;
     private $prix;
     private $nbLits;
     private $nbPers;
     private $image;
     private $description;

     public function __construct($id, $lits)
     {
          $this->prix = $id;
          $this->nbLits = $lits;
     }

     public function getPrix(){
          return $this->prix;
     }

     public function setPrix($prix){
          $this->prix = $prix;
     }
}

$c = new Chambre(20, 2);

$c->setPrix(1000);
$c->setPrix(2500);

var_dump($c);