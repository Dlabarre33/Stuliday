<?php
include '_head.php';
include '_navbar.php';
?>
<!-- Full screen modal -->
<div class="container">
    <h2>Voulez-vous supprimer cet élément ?</h2>
    <h3><?php echo $post['post_id']; ?></h3>
    <!-- On aura besoin uniquement d'un formulaire qui contient l'id et un bouton submit -->
    <form action="delete-mypost_post.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
        <button type="submit" class="btn btn-danger">Confirmer</button>
        <a href="my-posts.php" class="btn btn-primary">Annuler</a>
    </form>
</div>



<?php
include '_footer';
?>