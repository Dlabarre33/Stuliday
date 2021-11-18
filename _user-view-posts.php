<?php

require 'includes/connect.php';

$user = $_GET['post_id'];
if ($user) {
    // $post = $connexion->query('SELECT * FROM post WHERE post_id')->fetchAll();
    $userViewPost = "SELECT * from post WHERE post_id = :post_id";
    $reqUserViewPost = $connexion->prepare($viewPost);
    $reqUserViewPost->bindValue(':post_id', $id);
    $reqUserViewPost->execute();
    $post = $reqUserViewPost->fetch();
    if (isset($post)) {
        echo "Erreur";
        echo '<meta http-equiv="refresh" content="0;URL=my-post.php?error=noId">';
        exit();
    }
}
