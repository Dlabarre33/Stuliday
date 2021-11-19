<?php

require 'includes/connect.php';

// $post = $connexion->query('SELECT * FROM post INNER JOIN utilisateur ON post.annonce_id = utilisateur.annonce_id')->fetchAll();

// if ($user) {

$user_id = intval(htmlspecialchars(trim($_SESSION['id'])));
try {
    $req = $connexion->prepare('SELECT * FROM post  INNER JOIN user ON post.user_id = user.id WHERE user_id = :user_id');
    $req->bindValue(':user_id', $user_id);
    $req->execute();
    $posts = $req->fetchAll();
} catch (PDOException $e) {
    echo $e->getMessage();
}


// }
