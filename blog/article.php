<?php 
include "inc/connect.php";

$stmt = $pdo->prepare("SELECT * FROM article WHERE id = ?");

$stmt->execute([$_GET['id']]);

extract($stmt->fetch());

$article = new Article($id, $titre, $contenu, $date_creation, $auteur, $categorie);

include 'inc/header.php';


include "vues/vue_article.php";


include 'inc/footer.php';