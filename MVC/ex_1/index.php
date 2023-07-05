<?php

include "controller/UserController.php";
include "controller/VoitureController.php";

$userCtl = new UserController();
$voitureCtl = new VoitureController();

include "views/header.phtml";

$userCtl->userAction();
$voitureCtl->voitureAction();




include "views/home.phtml";