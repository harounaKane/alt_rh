<?php 
include "inc.php";
include 'component/header.php'; 

?> 

<h2 class="bg-dark text-center text-white">Réserver</h2>

<form action="" method="post">
     <div class="form-group">
          <label for="">Prénom</label>
          <input type="text" name="prenom" class="form-control">
     </div>
     <div class="form-group">
          <label for="">Nom</label>
          <input type="text" name="nom" class="form-control">
     </div>
     <div class="form-group">
          <label for="">Téléphone</label>
          <input type="text" name="tel" class="form-control">
     </div>
     
     <div class="form-group">
          <label for="">Date arrivée</label>
          <input type="date" name="arrivee" class="form-control">
     </div>
     <div class="form-group">
          <label for="">Date départ</label>
          <input type="date" name="depart" class="form-control">
     </div>

     <input type="submit" class="btn btn-success mt-3">
</form>

<?php include 'component/footer.php'; ?>
