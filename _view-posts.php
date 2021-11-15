<?php

//? Version non préparée : Récupération des données de post
$viewPosts = "SELECT * from product";
$reqViewPosts = $connexion->query($viewPosts);
$posts = $reqViewPosts->fetchAll();

//* Version raccourcie de la requête ci-dessus :
// $posts = $connexion->query("SELECT * from post")->fetchAll();
