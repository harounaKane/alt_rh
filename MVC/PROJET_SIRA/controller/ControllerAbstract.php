<?php

abstract class ControllerAbstract{

     public function loadFile($fileName, $path){
          //teste si un fichier a été uploader
          if( !empty($_FILES['photo']['name']) ){

               //teste sur la taille
               if( $_FILES['photo']['size'] <= 1000000){

                    //tableau des extensions de fichiers autorisés
                    $extensions = ['jpg', 'jpeg', 'png'];

                    //info fichier uploadé
                    $info = pathinfo($_FILES['photo']['name']);

                    //teste si l'extension du fichier est dans la collection des extansions autorisées
                    if( in_array($info['extension'], $extensions) ){

                         //déplacer le fichier dans le répertoire img
                         move_uploaded_file($_FILES['photo']['tmp_name'], "public/img/".$path . $fileName.".".$info['extension']);
                    
                    }  
               }
          }
     }


}