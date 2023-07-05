<?php

include "entities/Membre.php";

$post = [
     "id_membre" =>12,
     "pseudo"    => "toto",
     "prenom"    => "Jean",
     "machin"    => 450
];

$m = new Membre($post);

var_dump($m);