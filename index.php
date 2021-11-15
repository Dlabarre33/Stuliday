<?php
require 'includes/config.php';
require 'includes/connect.php';
include_once "_head.php";
include_once "_navbar.php";
$alert = false;

if (isset($_GET['success'])) {
    $alert = true;
    if ($_GET['success'] == "addedProduct") {
        $type = "success";
        $message = "Votre produit a bien été ajouté";
    }
}

if ($user) {
    include '_view-posts.php';
?>
    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Nos derniers biens disponibles</h1>
                    <p class="lead text-muted">A travers votre périple, trouver un toit confortable.</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <?php
                        foreach ($posts as $post) {
                        ?>
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title><?php echo $post['title']; ?></title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"><?php echo $post['image']; ?></text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text"><?php echo $post['description']; ?></p>
                                    <p class="card-text">Date de mis en ligne : <?php echo $post['date'] ? date('d/m/Y', strtotime($product['date'])) : ''; ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="#!" type="button" class="btn btn-sm btn-outline-secondary">Reservé</a>
                                            <a href="post.php?id=<?php echo $post['post_id']; ?>" type="button" class="btn btn-sm btn-outline-secondary">Voir l'annonce</a>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
            </div>
        </div>

    </main>

<?php } else { ?>
    <main class="container">
        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">Stuliday</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Trouver votre chez-vous, la ou vous voulez.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <a href="sign-up.php" type="button" class="btn btn-primary btn-lg px-4 me-sm-3">S'inscrire</a>
                    <a href="sign-in.php" type="button" class="btn btn-outline-secondary btn-lg px-4">Se connecter</a>
                </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
                <div class="container px-5 mb-5">
                    <img src="https://images.pexels.com/photos/6908367/pexels-photo-6908367.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" class="img-fluid border rounded-3 shadow-lg " alt="luxury studio" loading="lazy">
                </div>
            </div>
        </div>
    </main>

<?php
}

include "_footer.php";
?>