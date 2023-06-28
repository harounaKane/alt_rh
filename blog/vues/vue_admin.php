
     <h2 class="text-info"><i class="fa-solid fa-cogs"></i> Panneau d'administartion</h2>
     <a href="new_article.php">Rédiger un nouvel article</a>

     <h3 class="text-center">Liste des articles</h3>

     <table class="table table-strepid">
          <tr class="table-dark">
               <th>Titre</th>
               <th>Article</th>
               <th>Auteur</th>
               <th>Catégorie</th>
               <th>Action</th>
          </tr>

          <?php foreach($tabArticles as $article): ?>
               <tr>
                    <td> <?= $article->getTitre(); ?> </td>
                    <td> <?= substr($article->getContenu(), 0, 15); ?> </td>
                    <td> <?= $article->getAuteur()->getPrenom(); ?> </td>
                    <td> <?= $article->getCategorie(); ?> </td>
                    <td>
                         <a href="new_article.php?id=<?= $article->getId(); ?>&action=update"><i class="fa-solid fa-pen"></i></a>
                         &nbsp; - &nbsp;
                         <a href="new_article.php?id=<?= $article->getId(); ?>&action=delete"><i class="fa-solid fa-trash"></i></a>
                    </td>
               </tr>
          <?php endforeach; ?>

     </table>