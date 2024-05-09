<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="container bg-">
        <h2 class="text-center mt-4">Ajout User/Medecin</h2>
        <form class="row g-3" action="index.php" method="post" >

  <div class="col-md-6">
    <label for="inputNom" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" id="inputNom" placeholder="Ex: Ndiaye">
  </div>
  <div class="col-md-6">
    <label for="inputPrenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="inputPrenom" name="prenom" placeholder="Ex:Moussa">
  </div>
  <div class="col-md-6">
    <label for="inputTel" class="form-label">Telephone</label>
    <input type="text" class="form-control" name="tel" id="inputTel">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Addresse</label>
    <input type="text" class="form-control" name="adresse" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-check col-md-4">
  <input class="form-check-input" type="radio" name="type" value="User" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    User
  </label>
</div>
<div class="form-check col-md-4">
  <input class="form-check-input" type="radio" name="type" value="Medecin" id="flexRadioDefaul" >
  <label class="form-check-label" for="flexRadioDefault2">
    Medecin
  </label>
</div>
   <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="inputEmail4" disabled>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" name="mdp" id="inputPassword4" disabled>
  </div>
  
  <div class="col-md-6">
    <label for="inputSpec" class="form-label">Specialite</label>
    <input type="text" class="form-control" name="spec" id="inputSpec" disabled>
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary col-12" name="ajout">Ajouter</button>
  </div>
</form>
<h2 class="text-center mt-4">Liste User/Medecin</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Telephone </th>
      <th scope="col">type</th>
      <th scope="col">Matricule</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($all as $key => $value):?>
    <tr>
      <th scope="row"><?=$value["nom"]?></th>
      <td><?=$value["prenom"]?></td>
      <td><?=$value["tel"]?></td>
      <td><?=isset($value["specialite"])?"Medecin":"User"?></td>
      <td><?=$value["Matricule"]?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>

</html>