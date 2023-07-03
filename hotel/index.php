<?php include 'component/header.php'; ?> 


<div class="row">

<?php
for ($i=0; $i < 2 ; $i++): ?> 
     <div class="card mx-1" style="width: 15rem;">
          <img class="card-img-top" src="img/c1.jpg" alt="Card image cap">
          <div class="card-body">
               <a href="chambre.php?idChambre=1" class="btn btn-outline-success my-1 w-100">Détail</a>

               <a href="chambre.php?idChambre=1" class="btn btn-outline-success my-1 w-100">Update</a>
               <a href="chambre.php?idChambre=1" class="btn btn-outline-danger my-1 w-100">Delete</a>

          </div>
     </div>
<?php endfor; ?> 

</div>

<?php include 'component/footer.php';