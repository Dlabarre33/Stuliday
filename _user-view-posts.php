<?php

$user = $_GET['user_id'];

//? Version non préparée : Récupération des données de post
$userPosts = "SELECT * from post WHERE post_id = :post_id";
$reqUserPosts = $connexion->prepare($userPosts);
$reqUserPosts->binValue(':post_id',$user);
$reqUserPosts->execute();
$posts = $reqUserPosts->fetch();
if(empty($posts)){
    echo "erreur";
    echo '<meta http-equiv="refresh" content="0;URL=index.php?error=noId">';
}