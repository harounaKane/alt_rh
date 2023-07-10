<?php

class AgenceModel extends ModelGenerique{

     public function getAgence(int $id){
          $res = $this->getOne("agence", "id_agence", $id);
          return new Agence($res);
     }

     public function inserer(Agence $agence){
          $query = "INSERT INTO agence VALUES(NULL, :titre, :adress, :ville, :cp, :desc, :photo)";
          $this->executeRequete($query, [
               "titre"   => $agence->getTitre(),
               "adress"  => $agence->getAdresse(),
               "ville"   => $agence->getVille(),
               "cp"      => $agence->getCp(),
               "desc"    => $agence->getDescription(),
               "photo"   => $agence->getPhoto()
          ]);
     }

     public function agences(){
          $stmt = $this->executeRequete("SELECT * FROM agence");

          $tab = [];

          while($res = $stmt->fetch()){
               $tab[] = new Agence($res);
          }

          return $tab;
     }

}