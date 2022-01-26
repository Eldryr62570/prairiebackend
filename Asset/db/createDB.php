<?php

//Connexion a la DB
require './connDb.php';
//Ajout d'un utilisateur

$db -> exec("CREATE TABLE user(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,




) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4");

 