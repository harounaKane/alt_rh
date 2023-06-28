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