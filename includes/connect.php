<?php

require "dev.env.php";

//*Methode Try carch pour se connecter à la BDD
try {
    //? Utilisation de la Méthode variables d'environnement : plus sécurisé
    $connexion_string = "mysql:dbname=" . DATABASE . ";host=" . SERVER;
    $connexion = new PDO($connexion_string, 'root', 'root');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    $connexion = null;
    echo 'Erreur : ' . $error->getMessage();
}
