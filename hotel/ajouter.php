<?php include 'component/header.php'; ?> 

<form action="" method="post">

     <div class="row">
          <div class="form-group col-6">
               <label for="">Prix</label>
               <input type="number" name="prix" class="form-control">
          </div>
          <div class="form-group col-6">
               <label for="">Nombre lits</label>
               <input type="number" name="lits" class="form-control">
          </div>

          <div class="form-group col-6">
               <label for="">Nombre personnes</label>
               <input type="number" name="pers" class="form-control">
          </div>
          <div class="form-group col-6">
               <label for="">Image</label>
               <input type="file" name="image" class="form-control">
          </div>
          
          <div class="form-group col-6">
               <label for="">Description</label>
               <textarea name="description" class="form-control"></textarea>
          </div>
     </div>
     <input type="submit" class="btn btn-success mt-3">
</form>