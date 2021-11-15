<?php

require "dev.env.php";


try {
    //? Méthode variables d'environnement : plus sécurisé
    $connexion_string = "mysql:dbname=" . DATABASE . ";host=" . SERVER;
    //? Méthode chaine complète (ne surtout pas push ceci sur GitHub avec des variables de prod)
    // $connexion_string = "mysql:dbname=stuliday;host=localhost";
    $connexion = new PDO($connexion_string, 'root', 'root');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    $connexion = null;
    echo 'Erreur : ' . $error->getMessage();
}
