<?php

session_start();

spl_autoload_register(function($class){
     include "entities/". $class .".php";
});

$pdo = new PDO("mysql:host=127.0.0.1;dbname=rh_hotel", "root", "", [
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);


function executerRequete($query, $params = array()){

     global $pdo;
     
     //le système les resources pour prépare la requête
     $stmt = $pdo->prepare($query);
     
     //exécutionde la requête
     $stmt->execute($params);

     return $stmt;
}