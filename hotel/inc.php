<?php

session_start();

spl_autoload_register(function($class){
     include "entities/". $class .".php";
});

$pdo = new PDO("mysql:host=127.0.0.1;dbname=rh_hotel", "root", "", [
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);


function executerRequete($query, $params = array()){

     global $pdo;
     
     //le système les resources pour prépare la requête
     $stmt = $pdo->prepare($query);
     
     //exécutionde la requête
     $stmt->execute($params);

     return $stmt;
}

function getChambre($id){
     $stmt = executerRequete("SELECT * FROM chambre WHERE numChambre = :id", ['id' => $id]);

     extract($stmt->fetch());

     return new Chambre($numChambre, $prix, $nbLits, $nbPers, $image, $description);
}

function getClient($id){
     $stmt = executerRequete("SELECT * FROM client WHERE numClient = :id", ['id' => $id]);

     extract($stmt->fetch());

     return new Client($numClient, $prenom, $nom, $tel);
}