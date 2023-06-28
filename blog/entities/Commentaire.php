<?php 

class Commentaire{
     private $id;
     private $pseudo;
     private $contenu;
     private $date_commentaire;
     private $id_article;

     public function __construct($id = 0, $pseudo = null, $contenu = null, $date_commentaire = null, $id_article = null)
     {
          $this->id = $id;
          $this->pseudo = $pseudo;
          $this->contenu = $contenu;
          $this->date_commentaire = $date_commentaire;
          $this->id_article = $id_article;
          
     }     

     /**
      * Get the value of id
      */
     public function getId()
     {
          return $this->id;
     }

     /**
      * Set the value of id
      */
     public function setId($id): self
     {
          $this->id = $id;

          return $this;
     }

     /**
      * Get the value of pseudo
      */
     public function getPseudo()
     {
          return $this->pseudo;
     }

     /**
      * Set the value of pseudo
      */
     public function setPseudo($pseudo): self
     {
          $this->pseudo = $pseudo;

          return $this;
     }

     /**
      * Get the value of contenu
      */
     public function getContenu()
     {
          return $this->contenu;
     }

     /**
      * Set the value of contenu
      */
     public function setContenu($contenu): self
     {
          $this->contenu = $contenu;

          return $this;
     }

     /**
      * Get the value of date_commentaire
      */
     public function getDateCommentaire()
     {
          return $this->date_commentaire;
     }

     /**
      * Set the value of date_commentaire
      */
     public function setDateCommentaire($date_commentaire): self
     {
          $this->date_commentaire = $date_commentaire;

          return $this;
     }

     /**
      * Get the value of article
      */
     public function getIdArticle()
     {
          return $this->id_article;
     }

     /**
      * Set the value of article
      */
     public function setIdArticle($id_article): self
     {
          $this->id_article = $id_article;

          return $this;
     }
}