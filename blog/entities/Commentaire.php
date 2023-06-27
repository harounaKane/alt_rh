<?php 

class Commentaire{
     private $id;
     private $pseudo;
     private $contenu;
     private $date_commentaire;
     private $article;

     public function __construct($id = 0, $pseudo = null, $contenu = null, $date_commentaire = null, $article = null)
     {
          $this->id = $id;
          $this->pseudo = $pseudo;
          $this->contenu = $contenu;
          $this->date_commentaire = $date_commentaire;
          $this->article = $article;
          
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
     public function getArticle()
     {
          return $this->article;
     }

     /**
      * Set the value of article
      */
     public function setArticle($article): self
     {
          $this->article = $article;

          return $this;
     }
}