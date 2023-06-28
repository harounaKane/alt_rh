<?php 
include "inc/connect.php";

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


 //insertion des articles
 if( isset($_POST['titre']) && empty($_POST['id']) ){

     extract($_POST);
     $article = new Article(0, $titre, $contenu, "", $auteur, $categorie);

     // $query = "INSERT INTO article VALUES(NULL, ?, ?, now(), ?, ?)";
     // $query = "INSERT INTO article(titre, contenu, auteur, categorie) VALUES(?, ?, ?, ?)";

     $query = "INSERT INTO article VALUES(NULL, :titre, :contenu, now(), :auteur, :categorie)";

     $stmt = $pdo->prepare($query);

     $stmt->execute([
          "titre"        => $article->getTitre(),
          "contenu"      => $article->getContenu(),
          "auteur"       => $article->getAuteur(),
          "categorie"    => $article->getCategorie()
     ]);

     header("location: index.php");
     exit;
 }

 //Récupération de l'article à modifier via son id
 if( isset($_GET['id']) && ctype_digit($_GET['id']) && $_GET['action'] == "update" ){
    $article = getArticle($_GET['id']);
 }


 //Suppresion de l'article via son id
 if( isset($_GET['id']) && ctype_digit($_GET['id']) && $_GET['action'] == "delete" ){
    $stmt = $pdo->prepare("DELETE FROM article WHERE id = ? ");
    $stmt->execute([$_GET['id']]);

    header("location: admin.php");
    exit;
 }

 if(!empty($_POST['id'])){
    extract($_POST);
    $article = new Article($id, $titre, $contenu, $date_creation, $auteur, $categorie);

    $query = "UPDATE article SET titre = ?, contenu = ?, auteur = ?, categorie = ? WHERE id = ?";
    //$query = "UPDATE article SET titre = :titre, contenu = :contenu, auteur = :auteur, categorie = :categorie WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        $article->getTitre(),
        $article->getContenu(),
        $article->getAuteur(),
        $article->getCategorie(),
        $article->getId()
    ]);
    
    header("location: admin.php");
    exit;
 }

include 'inc/header.php';
include "vues/vue_new_article.php";


include 'inc/footer.php';