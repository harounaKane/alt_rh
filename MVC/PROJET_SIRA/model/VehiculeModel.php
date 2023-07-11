<?php

class VehiculeModel extends ModelGenerique{

     public function inserer(Vehicule $vehicule){
          $query = "INSERT iNTO vehicule VALUES(NULL, :agence, :titre, :marque, :modele, :desc, :photo, :prix)";

          $this->executeRequete($query, [
               "agence"  => $vehicule->getId_agence(),
               "titre"   => $vehicule->getTitre(),
               "marque"  => $vehicule->getMarque(),
               "modele"  => $vehicule->getModele(),
               "desc"    => $vehicule->getDescription(),
               "photo"   => $vehicule->getPhoto(),
               "prix"    => $vehicule->getPrix_journalier()
          ]);
     }

     public function vehicules(){
          $stmt = $this->executeRequete("SELECT * FROM vehicule");

          $tab = [];

          while($res = $stmt->fetch()){
               $tab[] = new Vehicule($res);
          }

          return $tab;
     }

     public function getVehicule(int $id){
          $stmt = $this->executeRequete("SELECT * FROM vehicule WHERE id_vehicule = :id", ['id' => $id]);

          return new Vehicule($stmt->fetch());
     }

}