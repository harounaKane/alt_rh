<?php 
include "entities/Auteur.php";
include "entities/Categorie.php";

include 'inc/header.php';

$pdo = new PDO(
     "mysql:host=localhost;dbname=rh_blog","root", ""
);

//récup des auteurs
$stmt = $pdo->prepare("SELECT * FROM auteur");
$stmt->execute();

$tab = [];
 while($res = $stmt->fetch()){
     $auteur = new Auteur($res['id'], $res['prenom'], $res['nom']);
     $tab[] = $auteur;
 }

 //récup des catégorie
 $stmt = $pdo->prepare("SELECT * FROM categorie");
 $stmt->execute();

 $tabCat = [];

 while($res = $stmt->fetch()){
     $cat = new Categorie($res['libelle']);
     $tabCat[] = $cat;
 }


include "vues/vue_new_article.php";


include 'inc/footer.php';