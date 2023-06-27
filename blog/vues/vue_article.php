
     <h2 class="text-info"><i class="fa-regular fa-file-lines"></i> Article</h2>
     <div>article  </div>
     <div>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem, corporis.
     </div>
     <div>Rédigé par Toto le 27/06/2023</div>


     <hr>
     <?php for($i=0; $i<3; $i++): ?>
          <i class="fa-solid fa-comment"></i> Rédigé par Pseudo 1 
          <div class="mb-4">
               Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis nihil fuga ut optio molestias! Doloribus laudantium sequi totam dolore dignissimos.
          </div>
     <?php endfor; ?>
     <hr>

     <div class="d-flex justify-content-center flex-column align-items-center">
          <div class="text-center"><i class="fa-regular fa-comment"></i> Commentaire</div>
          <form action="" method="post">
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
