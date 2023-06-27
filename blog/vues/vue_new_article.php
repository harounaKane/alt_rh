
     <h2 class="text-info"><i class="fa-solid fa-cogs"></i> Panneau d'administartion</h2>
     <span class="text-info"><i class="fa-solid fa-pen"></i> Rédiger un nouvel article</span>

     <div class="d-flex justify-content-center flex-column align-items-center">
          <div class="text-center"><i class="fa-regular fa-file"></i> Nouvel article</div>
          <form action="" method="post">
               <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" name="titre" class="form-control">
               </div>
               <div class="form-group">
                    <label for="">Article</label>
                    <textarea name="contenu" class="form-control" cols="30" rows="10"></textarea>
               </div>
               <label for="">Auteur</label>
               <select name="auteur" id="" class="form-select">
                    <?php foreach($tab as $key => $auteur): ?>
                         <option value="<?= $auteur->getId(); ?>"> <?= $auteur->getPrenom(); ?> </option>
                    <?php endforeach; ?> 
               </select>
               
               <label for="">Catégorie</label>
               <select name="categorie" id="" class="form-select">
                    <?php foreach($tabCat as $key => $categorie): ?>
                         <option value="<?= $categorie->getLibelle(); ?>"> <?= $categorie->getLibelle(); ?> </option>
                    <?php endforeach; ?> 
               </select>

               <div class="mt-3">
                    <input type="submit" class="btn btn-success">
                    <input type="reset" class="btn btn-danger">
               </div>
          </form>
     </div>
