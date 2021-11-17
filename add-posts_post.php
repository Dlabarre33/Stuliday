<?php

$auth = true;
require 'includes/config.php';
require 'includes/connect.php';

echo '<pre>';
var_dump($_POST);
echo '</pre>';

echo '<pre>';
var_dump($_FILES);
echo '</pre>';

//? Vérification de la validité du formulaire
if (empty($_POST['title']) || empty($_POST['description'])) {
    header('Location:add-posts.php?error=missingInput');
    exit();
} else {
    //? Si valide, initialisation des variables avec assainissement via trim et htmlspecialchars.
    $title = htmlspecialchars(trim($_POST['title']));
    $description = htmlspecialchars(trim($_POST['description']));

    if (!empty($_POST['date'])) {
        $date = htmlspecialchars(trim($_POST['date']));
    } else {
        $date = null;
    }

    if (empty($_FILES['image']['name'])) {
        $imagePath = 'public/uploads/noimg.png';
        $image = null;
    }else{
        $image = $_FILES ['image'];
    }
}

if (null !== $date && $date <= date('Y-m-d')) {
    header('Location:add-posts.php?error=pastDate');
    exit();
}

if ($image) {
    if ($image['size'] > 10000000) {
        header('Location:add-posts.php?error=imageTooBig');
        exit();
    }

    $valid_ext = ['jpg', 'jpeg', 'png'];
    $check_ext = strtolower(substr(strrchr($image['name'], '.'), 1));

    if (!in_array($check_ext, $valid_ext)) {
        header('Location:add-posts.php?error=wrongFormat');
        exit();
    }

    $imagePath = 'public/uploads/' . uniqid() . '/' . $image['name'];

    mkdir(dirname($imagePath));

    if (!move_uploaded_file($image['tmp_name'], $imagePath)) {
        if (!in_array($check_ext, $valid_ext)) {
            header('Location:add-posts.php?error=unknownError');
            exit();
        }
    }
}

//* Une fois les vérifications valider, on insert l'annonce dans la BDD
$insertPost = 'INSERT INTO post (title,description,date,image) VALUES(:title,:description,:date,:image)';
$reqInsertPost = $connexion->prepare($insertPost);
$reqInsertPost->bindValue(':title', $title, PDO::PARAM_STR);
$reqInsertPost->bindValue(':description', $description, PDO::PARAM_STR);
$reqInsertPost->bindValue(':date', $date, PDO::PARAM_STR);
$reqInsertPost->bindValue(':image', $imagePath, PDO::PARAM_STR);

if ($reqInsertPost->execute()) {
    header('Location:index.php?success=inlinePost');
    exit();
} else {
    header('Location:add-posts.php?error=unknownError');
    exit();
}
