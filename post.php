<?php

$auth = true;
require 'includes/config.php';
require 'includes/connect.php';
include_once '_head.php';
include_once '_navbar.php';

include_once '_view-single.php';

?>

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ps ps--active-y">
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
</main>

<?php

include_once '_footer.php';
?>