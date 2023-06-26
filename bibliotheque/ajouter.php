<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <title>Bibliothèque</title>
</head>
<body>

     <header class="bg-secondary p-4">
          <a class="btn btn-primary" href="ajouter.php">Ajouter un livre</a>
          <a class="btn btn-primary" href="index.php">Afficher bibliothèque</a>
     </header>

     <main class="container-fluid my-5">
         <form action="index.php" method="post">
               <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" name="titre" class="form-control">
               </div>
               <div class="form-group">
                    <label for="">Auteur</label>
                    <input type="text" name="auteur" class="form-control">
               </div>
               <div class="form-group">
                    <label for="">Editeur</label>
                    <input type="text" name="editeur" class="form-control">
               </div>

               <input type="submit" class="btn btn-success mt-3">

         </form>
     </main>
     
</body>
</html>