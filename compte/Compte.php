<?php

class Compte{
     public $numero;
     public $prenom;
     public $solde;

     public function __construct($numero, $prenom, $solde){
          $this->numero = $numero;
          $this->prenom = $prenom;
          $this->solde = $solde;
     }

     public function deposer($montant){
          $this->solde += $montant;
     }

     public function retirer($montant){
          if( $montant > $this->solde ){
               echo "montant ". $montant . " supérieur à votre solde: " . $this->solde;
          }else{
               $this->solde -= $montant;
          }
          
     }

}