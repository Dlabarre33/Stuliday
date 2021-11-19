<?php
require 'includes/connect.php';

$id = intval(htmlspecialchars(trim($_POST['id'])));

if (isset($_GET['id'])) {
    $getId = explode('=', $_SERVER['HTTP_REFERER'])[1];

    if (!($getId == $id)) {
        header('Location:../8/index.php?error=unauthorizedRequest');
        exit();
    }
}

try{
    $sqlDelete = 'DELETE FROM post WHERE id=:id';

        $reqDelete = $connexion->prepare($sqlDelete);
        $reqDelete->bindValue(':id', $id, PDO::PARAM_INT);

        $reqDelete->execute();
        header('Location:../8/index.php?success=delete');

} catch(PDOException){
    echo $e->getMessage();
}