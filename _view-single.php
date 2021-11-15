<?php

$id = $_GET['id'];

//? Version préparée 
$viewPost = "SELECT * from post WHERE post_id = :post_id";
$reqViewPost = $connexion->prepare($viewPost);
$reqViewPost->bindValue(':post_id',$id);
$reqViewPost->execute();
$post = $reqViewPost->fetch();
if(empty($post)){
    echo "Erreur";
    echo '<meta http-equiv="refresh" content="0;URL=index.php?error=noId">';
    exit();
}


// echo '<pre>';
// print_r($post);
// echo'</pre>';
