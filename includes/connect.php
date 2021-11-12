<?php

require "dev.env.php";

//? Méthode variables d'environnement : plus safe
$connexion_string = "mysql:dbname=" . DATABASE . ";host=" . SERVER;

//? Méthode chaine complète (ne surtout pas push ceci sur GitHub avec des variables de prod)
// $connexion_string = "mysql:dbname=stuliday;host=localhost";
try {
    $connexion = new PDO($connexion_string, 'root', 'root');
    //? Pour les utilisateurs de XAMP, utilisez la chaine ci-dessous.
    // $connexion = new PDO($connexion_string, USER, PASSWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $connexion = null;
    echo 'Erreur : ' . $e->getMessage();
}
