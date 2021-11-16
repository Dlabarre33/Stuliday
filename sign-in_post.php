<?php

require 'includes/config.php';
require 'includes/connect.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';

//? Je vérifie que mon formulaire est rempli
if (empty($_POST['username']) || empty($_POST['password'])) {
    header('Location:sign-in.php?error=missingInput');
    exit();
} else {
    //? S'il est rempli, j'initialise les variables en les assainissant
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
}

try {
    //? Requête préparée de récupération de l'utilisateur
    $verifUsername = "SELECT * FROM user WHERE username = :username LIMIT 1";
    $reqVerifUsername = $connexion->prepare($verifUsername);
    $reqVerifUsername->bindValue(':username', $username, PDO::PARAM_STR);
    $reqVerifUsername->execute();

    $user = $reqVerifUsername->fetch();
} catch (PDOException $e) {
    $connexion = null;
    echo 'Erreur : ' . $e->getMessage();
}

if ($user) {
    echo '<pre>';
    print_r($user);
    echo '</pre>';

    if (!password_verify($password, $user['password'])) {
        header('Location:sign-in.php?error=passwordNotMatch');
        exit();
    } else {
        $_SESSION['user'] = $user["username"];
        header('Location:index.php');
    }
} else {
    header('Location:sign-in.php?error=userNotFound');
    exit();
}
