<?php 
include "inc.php";
include 'component/header.php'; 

//Récupération des chambres au niveau BD
$stmt = executerRequete("SELECT * FROM chambre");

//tableau pour stocker toutes les instances de chambre.
$tabChambres = [];

//on récupère un array sur chaque tour de boucle
while( $res = $stmt->fetch() ){
     extract($res);
     $c = new Chambre($numChambre, $prix, $nbLits, $nbPers, $image, $description);

     $tabChambres[] = $c;
}

?> 


<div class="row">

<?php
foreach ($tabChambres as $chambre): ?> 
     <div class="card mx-1" style="width: 15rem;">
          <img class="card-img-top" src="img/<?= $chambre->getImage(); ?>" alt="Card image cap">
          <div class="card-body">
               <a href="chambre.php?idChambre=<?= $chambre->getNumChambre(); ?>" class="btn btn-outline-success my-1 w-100">Détail</a>

               <!-- access admin -->
               <?php if( isset($_SESSION['user']) && unserialize($_SESSION['user'])->getRole() == "admin" ): ?>
                    <a href="chambre.php?action=update&idChambre=<?= $chambre->getNumChambre(); ?>" class="btn btn-outline-success my-1 w-100">Update</a>
                    <a href="chambre.php?action=delete&idChambre=<?= $chambre->getNumChambre(); ?>" class="btn btn-outline-danger my-1 w-100">Delete</a>
               <?php endif; ?>
          </div>
     </div>
<?php endforeach; ?> 

</div>

<?php include 'component/footer.php';