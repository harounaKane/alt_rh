<?php

class Chambre {
     private $numChambre;
     private $prix;
     private $nbLits;
     private $nbPers;
     private $image;
     private $description;

     public function __construct($numChambre, $prix, $nbLits, $nbPers, $image, $description)
     {
          $this->numChambre = $numChambre;
          $this->prix = $prix;
          $this->nbLits = $nbLits;
          $this->nbPers = $nbPers;
          $this->image = $image;
          $this->description = $description;
     }


     /**
      * Get the value of numChambre
      */
     public function getNumChambre()
     {
          return $this->numChambre;
     }

     /**
      * Set the value of numChambre
      */
     public function setNumChambre($numChambre): self
     {
          $this->numChambre = $numChambre;

          return $this;
     }

     /**
      * Get the value of prix
      */
     public function getPrix()
     {
          return $this->prix;
     }

     /**
      * Set the value of prix
      */
     public function setPrix($prix): self
     {
          $this->prix = $prix;

          return $this;
     }

     /**
      * Get the value of nbLits
      */
     public function getNbLits()
     {
          return $this->nbLits;
     }

     /**
      * Set the value of nbLits
      */
     public function setNbLits($nbLits): self
     {
          $this->nbLits = $nbLits;

          return $this;
     }

     /**
      * Get the value of nbPers
      */
     public function getNbPers()
     {
          return $this->nbPers;
     }

     /**
      * Set the value of nbPers
      */
     public function setNbPers($nbPers): self
     {
          $this->nbPers = $nbPers;

          return $this;
     }

     /**
      * Get the value of image
      */
     public function getImage()
     {
          return $this->image;
     }

     /**
      * Set the value of image
      */
     public function setImage($image): self
     {
          $this->image = $image;

          return $this;
     }

     /**
      * Get the value of description
      */
     public function getDescription()
     {
          return $this->description;
     }

     /**
      * Set the value of description
      */
     public function setDescription($description): self
     {
          $this->description = $description;

          return $this;
     }
}
