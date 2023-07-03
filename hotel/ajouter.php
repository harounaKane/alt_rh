<?php 
include "inc.php";
include 'component/header.php'; 

if( isset($_POST["prix"]) ){
     extract($_POST);
     $c = new Chambre(0, $prix, $nblits, $nbpers, $image, $description);

     $query = "INSERT INTO chambre VALUES(NULL, :prix, :lit, :pers, :img, :desc)";

     $stmt = executerRequete($query, [
          "prix"    => $c->getPrix(),
          "lit"     => $c->getNbLits(),
          "pers"    => $c->getNbPers(),
          "img"     => $c->getImage(),
          "desc"    => $c->getDescription()
     ]);

     var_dump($c);
}

?> 

<form action="" method="post">

     <div class="row">
          <div class="form-group col-6">
               <label for="">Prix</label>
               <input type="number" name="prix" class="form-control">
          </div>
          <div class="form-group col-6">
               <label for="">Nombre lits</label>
               <input type="number" name="nblits" class="form-control">
          </div>

          <div class="form-group col-6">
               <label for="">Nombre personnes</label>
               <input type="number" name="nbpers" class="form-control">
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