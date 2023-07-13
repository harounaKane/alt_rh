<?php

include "vendor/autoload.php";

use App\Entities\Utilisateur;
use App\Entities\Commande;
use App\Entities\Article;
use App\Entities\Toto\Toto;

use App\Controller\ArticleController;
use App\Controller\CommandeController;

bonjour();
new Toto();
new CommandeController();

$cleint1 = new Utilisateur(["id" => 1, "prenom" => "Harouna", "login" => "rhalt"]);
$cleint2 = $cleint1;

$cleint2->setPrenom("Toto");


$c1 = new Commande();

$a1 = new Article();
$a2 = new ArticleController();



var_dump($a1);
//var_dump($a2);