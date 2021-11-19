<?php
include '_head.php';
include '_navbar.php';
?>

<h2>Voulez-vous supprimer cet élément ?</h2>
<h3><?php echo $post['post_id']; ?></h3>
<!-- On aura besoin uniquement d'un formulaire qui contient l'id et un bouton submit -->
<form action="delete-mypost_post.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <button type="submit">Confirmer</button>
    <a href="../8/index.php">Annuler</a>
</form>

<?php
include '_footer';
?>