<?php 

include "Livre.php";
include "Bibliotheque.php";

$l1 = new Livre("Oui Commandant", "Hampaté", "Truc");
$l2 = new Livre("Hamcoulele", "Hampaté", "Truc");

$b1 = new Bibliotheque([$l1, $l2]);

if( !empty($_POST['titre']) ){
     $livre = new Livre($_POST['titre'], $_POST['auteur'], $_POST['editeur']);
     $b1->ajouter($livre);    
}

$biblio = $b1->getLivres();

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <title>Bibliothèque</title>
</head>
<body>

     <header class="bg-secondary p-4">
          <a class="btn btn-primary" href="ajouter.php">Ajouter un livre</a>
          <a class="btn btn-primary" href="index.php">Afficher bibliothèque</a>
     </header>

     <main class="container-fluid my-5">
          <table class="table table-striped">
               <tr class="table-dark">
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Editeur</th>
               </tr>

               <?php for($i=0; $i < count($biblio); $i++): ?>
                    <tr>
                         <td> <?php echo $biblio[$i]->getTitre(); ?> </td>
                         <td> <?= $biblio[$i]->getAuteur(); ?> </td>
                         <td> <?= $biblio[$i]->getEditeur(); ?> </td>
                    </tr>
               <?php endfor; ?>

          </table>
     </main>
     
</body>
</html>