<?php
session_start();

//define('RACINE', '/projet_sira/');

include "entities/Membre.php";
include "entities/Agence.php";

include "model/ModelGenerique.php";

include "model/MembreModel.php";
include "model/AgenceModel.php";

include "controller/ControllerAbstract.php";
include "controller/MembreController.php";
include "controller/AgenceController.php";


$membreCtl = new MembreController();
$agenceCtl = new AgenceController();

$membreCtl->membreAction();
$agenceCtl->agenceAction();

if( empty($_GET) ){
     
     include "views/home.phtml";
}

