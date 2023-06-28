<?php
session_start();

include "entities/User.php";
include "model/UserModel.php";

$userModel = new UserModel;

include "views/header.phtml";

if( isset($_GET['action']) ){
     $action = $_GET['action'];

     switch($action){
          case "inscription":
               include "views/inscription.phtml";
               if( isset($_POST['login']) ){ 
                    $userModel->inscription();  
                    header("location: .");
                    exit;
               }
               break;
          case "connexion":
               include "views/connexion.phtml";
               if( isset($_POST['login']) ){
                    $userModel->connexion();
                    header("location: .");
                    exit;
               }
               break;
          case "deconnexion":
               session_destroy();
               header("location: .");
               exit;
               break;
     }

}
