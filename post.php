<?php

$auth = true;
require 'includes/config.php';
require 'includes/connect.php';
include_once '_head.php';
include_once '_navbar.php';

include_once '_view-single.php';

?>

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ps ps--active-y">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="<?php echo $post['image'] ?>" class="img-fluid" alt="...">
            </div>
            <div class="col">
                <h3 class="card-title"><?php echo $post['title'] ?></h3>
                <hr>
                <h4 class="card-text">Description :</h4>
                <p class="card-text"><?php echo $post['description'] ?></p>
                <hr>
                <h4 class="card-text">Date de publication :</h4>
                <p class="card-text"><?php echo $post['date'] ?></p>

                <a href="reserve.php" class="btn btn-primary">Reserver</a>
                <a href="index.php" class="btn btn-primary">Revenir à la liste des annonces</a>
            </div>

        </div>
</main>

<?php

include_once '_footer.php';
?>