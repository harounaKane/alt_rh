<?php 

include "inc/connect.php";


$tabArt = articles();;


include 'inc/header.php'; 

?>

          <h2 class="text-info"><i class="fa-solid fa-home"></i> Accueil</h2>
          <?php foreach($tabArt as $article): ?>
               <ul class="list-group my-2">
                    <li class="list-group-item text-info">
                         <a href="article.php?id=<?= $article->getId(); ?>">
                              <i class="fa-regular fa-hand-point-right"></i> <?= $article->getTitre(); ?>
                         </a>
                    </li>
                    <li class="list-group-item"><?= substr($article->getContenu(), 0, 20); ?> [...]</li>
                    <li class="list-group-item">Rédigé par 
                         <strong><?= $article->getAuteur()->getPrenom()." le ". $article->getDateCreation(); ?></strong>
                    </li>
               </ul>
          <?php endforeach; ?>
     
<?php include 'inc/footer.php'; ?>
 