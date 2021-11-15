<?php
include_once "_head.php";
include_once "_navbar.php";

$alert = false;

if (isset($_GET["error"])) {
    $alert = true;
    if ($_GET['error'] == "missingInput") {
        $type = "secondary";
        $message = "Les deux champs sont requis";
    }
    if ($_GET['error'] == "usernameExists") {
        $type = "secondary";
        $message = "Ce nom d'utilisateur existe déja";
    }
    if ($_GET['error'] == "differentPasswords") {
        $type = "warning";
        $message = "Les mots de passe ne concordent pas";
    }
}

if (isset($_GET['success'])) {
    $alert = true;
    $type = "success";
    $message = "Votre inscription s'est bien passée !";
}
?>

<main class="container">
    <div class="px-4 pt-5 my-5 text-center ">
        <h1 class="display-4 fw-bold">Stuliday</h1>
        <?php echo $alert ? "<div class='alert alert-{$type} mt-2'>{$message}</div>" : ''; ?>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Inscrivez-vous pour voir nos biens disponibles</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <div class="form-signin">
                    <div class="card-body">
                        <form role="form text-left" action="sign-up_post.php" method="POST">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="email-addon" name="username">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Re-type your password" aria-label="Confirm password" aria-describedby="password-addon" name="password2">
                            </div>
                            <div class="form-check form-check-info text-left">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked="">
                                <label class="form-check-label" for="flexCheckDefault">
                                    J'accepte les <a href="#!" class="text-dark font-weight-bolder">Termes
                                        et Conditions d'utilisation</a>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Sign up</button>
                            </div>

                        </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        <p class="mb-4 text-sm mx-auto">
                            Vous avez déjà un compte ?
                            <a href="sign-in.php" class="text-dark font-weight-bolder">Connectez-vous</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include_once "_footer.php";
?>