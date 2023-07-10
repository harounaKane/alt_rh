<?php

class AgenceController extends ControllerAbstract{

     public function agenceAction(){

          if( isset($_GET['actionAgence']) ){
               $action = $_GET['actionAgence'];

               $agenceMdl = new AgenceModel();

               $agences = $agenceMdl->agences();

               switch($action){
                    case "gestionAgence":

                         if( isset($_POST['titre']) ){
                              $agence = new Agence($_POST);
                              $agence->setPhoto($agence->getTitre());

                              $this->loadFile($agence->getTitre(), "agence/");

                              $agenceMdl->inserer($agence);

                              header("location: ?actionAgence=gestionAgence");
                              exit();
                         }

                         include "views/backOffice/agence.phtml";
                         break;

                    case "modifier":
                         $agenceActuelle = $agenceMdl->getAgence($_GET['id']);
                         include "views/backOffice/agence.phtml";
                         break;
               }
          }

     }
    
}