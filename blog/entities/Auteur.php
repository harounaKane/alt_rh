<?php

class Auteur{
     private $id;
     private $prenom;
     private $nom;

     public function __construct($id = 0, $prenom = null, $nom = null)
     {
          $this->id = $id;
          $this->prenom = $prenom;
          $this->nom = $nom;
     }

     public function getId()
     {
          return $this->id;
     }

     public function setId($id): self
     {
          $this->id = $id;

          return $this;
     }

     public function getPrenom()
     {
          return $this->prenom;
     }

     public function setPrenom($prenom): self
     {
          $this->prenom = $prenom;

          return $this;
     }

     public function getNom()
     {
          return $this->nom;
     }

     public function setNom($nom): self
     {
          $this->nom = $nom;

          return $this;
     }
}