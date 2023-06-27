<?php

include "entities/Article.php";

$pdo = new PDO(
     "mysql:host=localhost;dbname=rh_blog","root", "",
     [
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
     ]
);