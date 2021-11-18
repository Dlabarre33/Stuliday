<?php

require 'includes/connect.php';

if ($user) {

    $post = $connexion->query('SELECT * FROM post')->fetchAll();
}
