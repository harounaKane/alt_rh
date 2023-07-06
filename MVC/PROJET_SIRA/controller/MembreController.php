<?php

class MembreController
{
    public function membreAction()
    {
        $membreMdl = new MembreModel();

        if(isset($_GET['action']))
        {
            $action = $_GET['action'];
            if($action == "inscription")
            {
                include "views/user/inscription.phtml";
                if(isset($_POST['pseudo']))
                {
                    extract($_POST);
                    // var_dump($_POST);

                    $membre = new Membre(0, $pseudo, $mdp, $nom, $prenom, $email, $civilte, null, null);

                    $membreMdl->inserer($membre);

                    header("location: ?action=connexion");
                }

            }else if($action == "connexion")
            {
                include "views/user/connexion.phtml";

                if ( isset($_POST['pseudo']) )
                {
                    $membre = $membreMdl->connexion($_POST['pseudo'],$_POST['mdp']);

                    //teste si connexion ok
                    if( $membre ){

                        $_SESSION['user'] = serialize($membre);

                        header("location: .");
                        exit;
                    }

                    
                }
        
            }else if($action == "deconnexion"){
                session_destroy();
                header("location: .");
                exit;
            }
            
        }
 
    }
}