<?php
session_start();

//define('RACINE', '/projet_sira/');

include "entities/Membre.php";

include "model/ModelGenerique.php";

include "model/MembreModel.php";

include "controller/MembreController.php";


$membre = new MembreController();

$membre->membreAction();

if( !isset($_GET['action']) ){
     
     include "views/home.phtml";
}

