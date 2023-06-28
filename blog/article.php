<?php 
include "inc/connect.php";

//insertion de commentaire, si le formulaire est envoyé
if( isset($_POST['pseudo']) ){
     $comment = new Commentaire(0, $_POST['pseudo'], $_POST['contenu'], null, $_POST['id_article']);
     $query = "INSERT INTO commentaire (pseudo, contenu, id_article) VALUES(?, ?, ?)";
     $stmt = $pdo->prepare($query);
     $stmt->execute([$comment->getPseudo(), $comment->getContenu(), $comment->getIdArticle()]);

     //redirection & pour éviter la double soumission du formulaire
     header("location: article.php?id=". $comment->getIdArticle());
     exit;
}

//Réup l'article cliqué
$stmt = $pdo->prepare("SELECT * FROM article WHERE id = ?");
$stmt->execute([$_GET['id']]);

//produi des variables
extract($stmt->fetch());

$auteurArticle = getAuteur($auteur);

$article = new Article($id, $titre, $contenu, $date_creation, $auteurArticle, $categorie);


//Récuperer les commentaires liés à cet article
$stmt = $pdo->prepare("SELECT * FROM commentaire WHERE id_article = ?");
$stmt->execute([$article->getId()]);

$tabComment = [];
while($res = $stmt->fetch()){
     extract($res);
     $tabComment[] = new Commentaire($id, $pseudo, $contenu, $date_creation, $id_article);
}

include 'inc/header.php';


include "vues/vue_article.php";


include 'inc/footer.php';