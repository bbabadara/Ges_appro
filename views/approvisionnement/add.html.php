<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <header>

  </header>
  <main>
    <h2 class="text-center mt-3">Ajout Approvisionnement</h2>
    <div class="container col-10 mt-2">
      <form class="row g-3 shadow p-3 mb-5 bg-body-tertiary rounded">
      <div class="mb-3 row col-6 mt-5">
    <label for="Date" class="col-sm-2 col-form-label">Date</label>
    <div class="col-md-6">
      <input type="Date"  class="form-control" id="" name="date" value="">
    </div>
    </div>
      <div class="mb-3 row col-6 mt-5">
    <label for="Fournisseur" class="col-sm-2 col-form-label">Fournisseur</label>
    <div class="col-md-6">
    <select id="inputState" name="fournisseur" class="form-select">
            <option selected>Choose...</option>
            <?php foreach ($fournisseurs as $fournisseur) : ?>
            <option value="<?=$fournisseur->idf?>"><?php echo $fournisseur->nomf ?></option>
            <?php endforeach ?>
          </select>    </div>
    </div>

        <div class="col-md-4">
          <label for="Categorie" class="form-label">Categorie</label>
          <select id="inputState" name="categorie" class="form-select">
            <option selected>Choose...</option>
            <?php foreach ($categories as $categorie) : ?>
            <option value="<?=$categorie->idc?>"><?php echo $categorie->libellec ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="col-md-4">
          <label for="produit" class="form-label">Produit</label>
          <select id="inputState" name="produit" class="form-select">
            <option selected>Choose...</option>
            <?php foreach ($produits as $produit) : ?>
            <option value="<?=$produit->idu?>"><?php echo $produit->libellep ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="col-md-4">
          <label for="unite" class="form-label">Unite</label>
          <select id="inputState" name="unite" class="form-select">
            <option selected>Choose...</option>
            <?php foreach ($unites as $unite) : ?>
            <option value="<?=$unite->idu?>"><?php echo $unite->libelleu ?></option>
            <?php endforeach ?>
          </select>
        </div>

        <div class="col-md-4">
          <label for="qte" class="form-label">Quantite</label>
          <input type="number" class="form-control" name="qte" id="">
        </div>
        <div class="col-md-4">
          <label for="Prix" class="form-label">Prix</label>
          <input type="number" class="form-control" name="prix" id="">
        </div>


        <div class="col-md-2 mt-5">

          <button type="submit" class="btn btn-primary col-10">Ajouter Article</button>
        </div>



      </form>
    </div>

    <div class="container col-10 mt-5">
    <table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">Produit</th>
      <th scope="col">Unites</th>
      <th scope="col">Quantite </th>
      <th scope="col">Prix</th>
      <th scope="col">Montant</th>
    </tr>
  </thead>
  <tbody>
    <?php $all=[]; foreach ($all as $key => $value):?>
    <tr>
      <th scope="row"><?=$value["nom"]?></th>
      <td><?=$value["prenom"]?></td>
      <td><?=$value["tel"]?></td>
      <td><?=isset($value["specialite"])?"Medecin":"User"?></td>
      <td><?=$value["Matricule"]?></td>
    </tr>
    
    <?php endforeach ?>
    <tr>
      <td > aaaa  </td>
      <td > aaaa  </td>
      <td > aaaa  </td>
      <td > aaaa  </td>
      <td > aaaa  </td>
    </tr>
    <tr>
      <td > aaaa  </td>
      <td > aaaa  </td>
      <td > aaaa  </td>
      <td > aaaa  </td>
      <td > aaaa  </td>
    </tr>
    <tr>
      <td > aaaa  </td>
      <td > aaaa  </td>
      <td > aaaa  </td>
      <td > aaaa  </td>
      <td > aaaa  </td>
    </tr>
  </tbody>
</table>
    </div>

    <div class="container d-flex justify-content-end">
      <h6>Total: 23454 </h6>
    </div>
    <div class="container d-flex justify-content-end">
      <button class="btn btn-primary mt-3">Enregistrer</button>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>