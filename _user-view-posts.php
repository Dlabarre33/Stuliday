<?php

require 'includes/connect.php';








if ($user) {

    $post = $connexion->query('SELECT post FROM post')->fetchAll();
}
