<?php

require './connDB.php';
$db -> exec("SET FOREIGN_KEY_CHECKS = 0");
$db -> exec("DROP TABLE Editeurs");
$db -> exec("DROP TABLE Jeux");
$db -> exec("DROP TABLE Plateforme");
$db -> exec("DROP TABLE est_present");
$db -> exec("SET FOREIGN_KEY_CHECKS = 1");

echo 'DB deleted succesfully !';