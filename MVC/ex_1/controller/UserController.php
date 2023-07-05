<?php

class UserController{

     public function userAction(){

          if( isset($_GET['action'])){
               
               $action = $_GET['action'];

               if( $action == "connexion" ){
                    include "views/user/connexion.phtml";

               }else if( $action == "inscription" ){
                    include "views/user/inscription.phtml";
               
               }else if( $action == "new_user" ){
                    var_dump("new_user");

               }else if( $action == "deconnexion" ){
                    //session_destroy();

                    header("location: .");
                    exit;
               }
          }
     }
     
}