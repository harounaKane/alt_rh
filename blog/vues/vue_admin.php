
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

          <?php for($i=0; $i<3; $i++): ?>
               <tr>
                    <td> article <?= $i+1; ?> </td>
                    <td> contenu article <?= $i+1; ?> </td>
                    <td> auteur article <?= $i+1; ?> </td>
                    <td> catégorie article <?= $i+1; ?> </td>
                    <td>
                         <a href=""><i class="fa-solid fa-pen"></i></a>
                         &nbsp; - &nbsp;
                         <a href=""><i class="fa-solid fa-trash"></i></a>
                    </td>
               </tr>
          <?php endfor; ?>

     </table>