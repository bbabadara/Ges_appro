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
        <h2 class="text-center mt-3">Liste des fournisseurs</h2>

        <div class="container d-flex col-10 mt-5 flex-row-reverse">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Ajouter</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un fournisseur</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="col-form-label">Nom complet:</label>
                                    <input type="text" name="nomf" class="form-control" id="nameInput">
                                    <div id="name-error" class="invalid-feedback">

                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="conversionInput" class="col-form-label">Telephone:</label>
                                    <input type="text" name="telf" class="form-control" id="telInput"></input>
                                </div>
                                <div id="conversion-error" class="invalid-feedback">

                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" id="btnAdd" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-10 mt-2">
            <table class="table table-hover table-bordered border-primary">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Telephone </th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fournisseurs as $fournisseur) : ?>
                        <tr>
                            <td> <?php echo $fournisseur->idf ?> </td>
                            <td> <?php echo $fournisseur->nomf ?> </td>
                            <td> <?php echo $fournisseur->telf ?> </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
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