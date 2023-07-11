<?php

class VehiculeController extends ControllerAbstract{
    
     public function vehiculeAction(){

          if( isset($_GET['actionVehicule']) ){
               $action = $_GET['actionVehicule'];

               $agenceMdl = new AgenceModel();
               $vehiculeMdl = new VehiculeModel();

               $agences = $agenceMdl->agences();
               $vehicules = $vehiculeMdl->vehicules();

               switch($action){
                    case "gestionVehicule":

                         if( isset($_POST['titre']) ){
                              $vehicule = new Vehicule($_POST);

                              $vehicule->setPhoto($vehicule->getTitre().'.'.$this->getFileExtension());

                              $this->loadFile($vehicule->getPhoto(), "vehicule/");

                              $vehiculeMdl->inserer($vehicule);

                              header("location: ?actionVehicule=gestionVehicule");
                              exit();
                         }

                         break;
                    case "modifier":
                         $vehiculeActuel = $vehiculeMdl->getVehicule($_GET['id']);
                         
                         break;
               }

               
               include "views/backOffice/vehicule.phtml";
          }
     }
}