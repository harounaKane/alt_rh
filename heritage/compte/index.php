<?php

include 'Compte.php';
include 'CompteAvecDec.php';

$c1 = new Compte(1001, "Toto", 1500);

$c2 = new CompteAvecDec(1002, "TATA", 2000, 500);
//$c2->retirer(2501);

echo $c1;
echo "<br>";   
echo $c2;

var_dump($c2);

var_dump($c1);
