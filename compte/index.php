<?php

include "Compte.php";

$c1 = new Compte(1001, "Jeans", 1500);
$c2 = new Compte(1002, "Julie", 250);

echo $c1->solde;
echo "<br>";
echo $c2->solde;

echo "<br>";


echo $c1->solde;
echo "<br>";
echo $c2->solde;