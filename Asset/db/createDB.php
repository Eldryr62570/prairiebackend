<?php

//Connexion a la DB
require './connDB.php';
//Ajout d'un utilisateur

$db -> exec("CREATE TABLE user(

    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username VARCHAR(255) NOT NULL,
    password CHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    role ENUM ('admin','registered','visitor') NULL DEFAULT 'visitor',
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP

) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4");

echo 'USER CREATED';