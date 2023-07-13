<?php

session_start();

include "vendor/autoload.php";

use App\Controller\HomeController;
use App\Controller\UtilisateurController;

$home = new HomeController;
$utilisateur = new UtilisateurController;



$home->index();
$utilisateur->user();