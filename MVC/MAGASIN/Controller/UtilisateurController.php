<?php 

namespace App\Controller;

use App\Entities\Utilisateur;
use App\Model\UserModel;

class UtilisateurController extends AbstractController{

     function user(){
          if( isset($_GET['action']) ){
               $action = $_GET['action'];

               $userModel = new UserModel();

               switch($action){
                    case "inscription":
                    
                         if( isset($_POST['login']) ){
                              $user = new Utilisateur($_POST);
                              if( $userModel->inserer($user) ){

                                   header("location: .");
                                   exit;
                              }

                         }

                         $this->render("utilisateur/logon");
                         break;
               }
          }
     }

}