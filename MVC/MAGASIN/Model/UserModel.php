<?php 

namespace App\Model;

use App\Entities\Utilisateur;

class UserModel extends ModelGenerique{

     public function inserer(Utilisateur $user){
          $user->setLogin($this->validate($user->getLogin(), 6, 10)); 
          $user->setMdp($this->validate($user->getMdp(), 5, 10));
          $user->setPrenom($this->validate($user->getPrenom(), 2, 15));
          $user->setNom($this->validate($user->getNom(), 2, 15));

          if( UserModel::$isValide ){
               $query = "INSERT INTO utilisateur VALUES(NULL, :sexe, :prenom, :nom, :login, :mdp, :email, :tel, 'client', :adresse, :cp, :ville)";

               $this->executeRequete($query, [
                    "sexe"         => $user->getSexe(),
                    "prenom"       => $user->getPrenom(),
                    "nom"          => $user->getNom(),
                    "login"        => $user->getLogin(),
                    "mdp"          => $user->getMdp(),
                    "email"        => $user->getEmail(),
                    "tel"          => $user->getTel(),
                    "adresse"      => $user->getAdresse(),
                    "cp"           => $user->getCp(),
                    "ville"        => $user->getVille()
               ]);

               return true;
          }else{
               return false;
          }

     }

}