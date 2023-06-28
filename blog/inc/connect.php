<?php

include "entities/Article.php";
include "entities/Auteur.php";
include "entities/Commentaire.php";
include "entities/Categorie.php";

$pdo = new PDO(
     "mysql:host=localhost;dbname=rh_blog","root", "",
     [
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
     ]
);

//prend en paramètre un id et retourne une instance Auteur
function getAuteur($id){
     global $pdo;

     $stmt = $pdo->prepare("SELECT * FROM auteur WHERE id = ?");
     $stmt->execute([$id]);

     $res = $stmt->fetch();

     return new Auteur($res['id'], $res['prenom'], $res['nom']);
}

//retourn une collection d'articles
function articles(){
     global $pdo;

     $stmt = $pdo->prepare("SELECT * FROM article");

     $stmt->execute();

     $tabArt = [];

     while($res = $stmt->fetch()){
          extract($res);

          $auteur = getAuteur($auteur);

          $article = new Article($id, $titre, $contenu, $date_creation, $auteur, $categorie);
          $tabArt[] = $article;
     }

     return $tabArt;
}

//prend en paramètre un id et retourne une instance Auteur
function getArticle($id){
     global $pdo;

     $stmt = $pdo->prepare("SELECT * FROM article WHERE id = ?");
     $stmt->execute([$id]);

     $res = $stmt->fetch();
     extract($res);

     return new Article($id, $titre, $contenu, $date_creation, getAuteur($auteur), $categorie);
}