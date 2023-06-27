<?php include 'inc/header.php'; ?>

     
          <h2 class="text-info"><i class="fa-solid fa-home"></i> Accueil</h2>
          <?php for($i=0; $i<5; $i++): ?>
               <ul class="list-group my-2">
                    <li class="list-group-item text-info">
                         <a href="vues/article.php?id=<?= $i+1; ?>">
                              <i class="fa-regular fa-hand-point-right"></i> article <?= $i+1; ?>
                         </a>
                    </li>
                    <li class="list-group-item">Contenu ...</li>
                    <li class="list-group-item">Rédigé par Toto le 27/06/2023</li>
               </ul>
          <?php endfor; ?>
     
<?php include 'inc/footer.php'; ?>
 