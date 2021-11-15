<?php

require 'includes/connect.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';

//? Je vérifie que tous les champs ne sont pas vides
if (in_array('', $_POST)) {
    header('Location:sign-up.php?error=missingInput');
    exit();
} else {
    //? Si tous les champs sont remplis alors j'assigne les données reçues à des variables auquel j'applique htmlspecialchars. htmlspecialchars est une fonction qui permet de virer l'ensemble des balises HTML.

    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars($_POST['password']);
    $password2 = htmlspecialchars($_POST['password2']);
}
//* $verifUsername = "SELECT * FROM user WHERE username = :username";
$verifUsername = 'SELECT COUNT(*) FROM user WHERE username = :username';
$reqVerifUsername = $connexion->prepare($verifUsername);
$reqVerifUsername->bindValue(':username', $username, PDO::PARAM_STR);
$reqVerifUsername->execute();

// $pdo->fetchColumn(); //* J'obtiens la première colonne du premier résultat de la requête.
$resultatVerifUsername = $reqVerifUsername->fetchColumn();

//? Je compte le nom d'utilisateur qui possède l'username souhaité
if ($resultatVerifUsername > 0) {
    header('Location:sign-up.php?error=usernameExists');
    exit();
}

//? Je vérifie que les mots de passe correspondent
if ($password !== $password2) {
    header('Location:sign-up.php?error=differentPasswords');
    exit();
}

//? Cryptage (en vrai hashage) du mot de passe
$password = password_hash($password, PASSWORD_DEFAULT);

//? Requête préparée d'insertion dans la BDD

$insertUser = 'INSERT INTO user (username,password) VALUES (:username,:password)';
$reqInsertUser = $connexion->prepare($insertUser);

//?Enregistrement des données users dans la BDD

$reqInsertUser->bindValue(':username', $username, PDO::PARAM_STR);
$reqInsertUser->bindValue(':password', $password, PDO::PARAM_STR);

$resultatInsertUser = $reqInsertUser->execute();


if ($resultatInsertUser) {
    header('Location:sign-up.php?success=loginSuccessful');
    exit();
}
