<?php

class VoitureController{


     public function voitureAction(){

          if( isset($_GET['action']) ){
               $action = $_GET['action'];

               switch($action){
                    case "new_voiture":
                         var_dump("new car");
                         break;
               }
          }
     }
     
}