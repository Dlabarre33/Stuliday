<?php
require 'includes/config.php';
include_once "_head.php";
include_once "_navbar.php";
?>
<main class="container">
    <div class="px-4 pt-5 my-5 text-center ">
        <h1 class="display-4 fw-bold">Stuliday</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Identifiez-vous si vous avez un compte</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <div class="form-signin">
                    <div class="card-body">
                        <form role="form" action="sign-in_post.php" method="POST">
                            <label>Username</label>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Type your username..." aria-label="username" aria-describedby="username-addon" name="username">
                            </div>
                            <label>Password</label>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password">
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Sign
                                    in</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        <p class="mb-4 text-sm mx-auto">
                            Vous n'avez pas de compte?
                            <a href="sign-up.php" class="text-info text-gradient font-weight-bold">Inscrivez-vous ici</a>
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