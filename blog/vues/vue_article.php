
     <h2 class="text-info"><i class="fa-regular fa-file-lines"></i> Article</h2>
     <div><?= $article->getTitre(); ?>  </div>
     <div>
          <?= $article->getContenu(); ?> 
     </div>
     <div>Rédigé par <strong><?= $article->getAuteur()->getPrenom(). " le ". $article->getDateCreation(); ?> </strong></div>


     <hr>
     <?php foreach($tabComment as $comment): ?>
          <i class="fa-solid fa-comment"></i> Rédigé par <?= $comment->getPseudo(); ?> 
          <div class="mb-4">
               <?= $comment->getContenu(); ?> 
          </div>
     <?php endforeach; ?>
     <hr>

     <div class="d-flex justify-content-center flex-column align-items-center">
          <div class="text-center"><i class="fa-regular fa-comment"></i> Commentaire</div>
          <form action="" method="post">
               <input type="hidden" name="id_article" value="<?= $article->getId(); ?>">
               <div class="form-group">
                    <label for="">Pseudo</label>
                    <input type="text" name="pseudo" class="form-control">
               </div>
               <div class="form-group">
                    <label for="">Contenu</label>
                    <textarea name="contenu" class="form-control" cols="30" rows="10"></textarea>
               </div>

               <div class="mt-3">
                    <input type="submit" class="btn btn-success">
                    <input type="reset" class="btn btn-danger">
               </div>
          </form>
     </div>
