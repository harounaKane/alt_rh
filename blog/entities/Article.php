<?php

class Article{
     private $id;
     private $titre;
     private $contenu;
     private $date_creation;
     private $categorie;
     private $auteur;

     public function __construct($id=0, $titre = null, $contenu = null, $date_creation = null, $auteur = null, $categorie = null)
     {
          $this->id = $id;
          $this->titre = $titre;
          $this->contenu = $contenu;
          $this->date_creation = $date_creation;
          $this->categorie = $categorie;
          $this->auteur = $auteur;
     }


     public function getId(){
          return $this->id;
     }

     public function setId($id): self {
          $this->id = $id;

          return $this;
     }


     public function getTitre()
     {
          return $this->titre;
     }


     public function setTitre($titre): self
     {
          $this->titre = $titre;

          return $this;
     }

     public function getContenu()
     {
          return $this->contenu;
     }

     public function setContenu($contenu): self
     {
          $this->contenu = $contenu;

          return $this;
     }

     public function getDateCreation()
     {
          return $this->date_creation;
     }

     public function setDateCreation($date_creation): self
     {
          $this->date_creation = $date_creation;

          return $this;
     }

     public function getCategorie()
     {
          return $this->categorie;
     }

     public function setCategorie($categorie): self
     {
          $this->categorie = $categorie;

          return $this;
     }

 
     public function getAuteur()
     {
          return $this->auteur;
     }

     public function setAuteur($auteur): self
     {
          $this->auteur = $auteur;

          return $this;
     }
}