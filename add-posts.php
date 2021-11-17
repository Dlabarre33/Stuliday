<?php

$auth = true;
require 'includes/config.php';
require 'includes/connect.php';
include "_head.php";
include "_navbar.php";

$alert = false;
// //*Vérification du remplissage des champs
if (isset($_GET["error"])) {
    $alert = true;
    if ($_GET['error'] == "missingInput") {
        $type = "secondary";
        $message = "Les champs requis sont vides";
    }
    if ($_GET['error'] == "pastDate") {
        $type = "secondary";
        $message = "La date supérieur ou égal à la date du jour.";
    }
    if ($_GET['error'] == "unknownError") {
        $type = "warning";
        $message = "Une erreur s'est produite, réessayer ultérieurement.";
    }
    if ($_GET['error'] == "tooBig") {
        $type = "warning";
        $message = "L'image est trop lourde , elle doit être < 10Mo";
    }
    if ($_GET['error'] == "wrongFormat") {
        $type = "warning";
        $message = "L'image est au mauvais format : Les formats acceptés sont jpg,png,jpeg";
    }
}

?>
<main>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Ajouter une annonce sur notre site</h1>
                <p class="lead text-muted">Vous souhaitez mettre une annonce en ligne, compléter notre formulaire.</p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <form action="add-posts_post.php" method="post" class="container" enctype="multipart/form-data">
                <?php echo $alert ? "<div class='alert alert-{$type} mt-2'>{$message}</div>" : ''; ?>
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre de l'annonce</label>
                    <input type="text" class="form-control" id="titre" name="title" >
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Description</label>
                    <textarea class="form-control" id="detail" rows="3" name="description" ></textarea>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Image du logement</label>
                    <input class="form-control" type="file" id="formFile" accept=".png,.jpg,.jpeg" name="image">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" placeholder="01-01-2022" name="date">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-success btn-lg">Mettre en ligne</button>
                </div>

            </form>
        </div>
    </div>

</main>
<?php
include "_footer.php";
?>