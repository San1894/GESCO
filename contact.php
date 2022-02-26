<?php
session_start();
if (!isset($_SESSION['log'])) {
    header('location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="connect.php" method="POST" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouveau contact</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="cname" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="cname" placeholder="Votre nom" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Votre adresse e-mail" required>
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Telephone</label>
                        <input type="number" class="form-control" id="mobile" placeholder="Votre numero de telephone" required>
                    </div>
                    <div class="mb-3">
                        <label for="adress" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adress" placeholder="Votre adresse" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="save" class="btn btn-success" data-bs-dismiss="modal">Enregistrer</button>
                    <button type="button" class="btn btn-dark" id="cancel" data-bs-dismiss="modal">Fermer</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container my-3">
        <h1 class="text-center">
            GESTIONNAIRE DE CONTACT
            <button type="button" id="logout" class="btn btn-primary" style="position:absolute; left: 80%;">DECONNEXION</button>
        </h1>

        <h2>
            <?php echo '<h2 class="text-center">BIENVENU <strong style="color:#86b7fe;"> ' . $_SESSION['pseudo'] . ' !!</strong> </h2>'; ?>
        </h2>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completeModal">
            Ajouter Un Contact
        </button>

        <table class="table table-dark table-hover my-5">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody id="listcontact">
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td id="btns">
                        <button type="button" id="edit-contact" class="btn btn-outline-success">Edit</button>
                        <button type="button" id="delete-contact" class="btn btn-outline-danger">Delete</button>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>


    <script src="dist/js/jquery-3.6.0.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>
</body>

</html>