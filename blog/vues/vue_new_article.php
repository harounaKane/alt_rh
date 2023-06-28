
     <h2 class="text-info"><i class="fa-solid fa-cogs"></i> Panneau d'administartion</h2>
     <span class="text-info"><i class="fa-solid fa-pen"></i> Rédiger un nouvel article</span>

     <div class="d-flex justify-content-center flex-column align-items-center">
          <div class="text-center"><i class="fa-regular fa-file"></i> Nouvel article</div>
          <form action="" method="post">
               <input type="hidden" value="<?= isset($article) ? $article->getId() : '' ?>" name="id">
               <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" name="titre" value="<?= isset($article) ? $article->getTitre() : ''; ?>" class="form-control">
               </div>
               <div class="form-group">
                    <label for="">Article</label>
                    <textarea name="contenu" class="form-control" cols="30" rows="10"><?= isset($article) ? $article->getContenu() : ''; ?> </textarea>
               </div>
               <label for="">Auteur</label>
               <select name="auteur" id="" class="form-select">
                    <?php foreach($tab as $key => $auteur): ?>
                         <option value="<?= $auteur->getId(); ?>" 
                                        <?= isset($article) && $article->getAuteur()->getPrenom() == $auteur->getPrenom() ? 'selected' : '' ?>> 
                              <?= $auteur->getPrenom(); ?> 
                         </option>
                    <?php endforeach; ?> 
               </select>
               
               <label for="">Catégorie</label>
               <select name="categorie" id="" class="form-select">
                    <?php foreach($tabCat as $key => $categorie): ?>
                         <option value="<?= $categorie->getLibelle(); ?>"
                                 <?= isset($article) && $article->getCategorie() == $categorie->getLibelle() ? 'selected' : '' ?>> 
                              <?= $categorie->getLibelle(); ?> 
                         </option>
                    <?php endforeach; ?> 
               </select>

               <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="<?= isset($article) ? 'Update' : 'Ajouter' ?>"?>
                    <input type="reset" class="btn btn-danger">
               </div>
          </form>
     </div>
