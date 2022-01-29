<?php 
$host = 'localhost';
$dbname = 'gamelibrary';
$user = 'root';
$psw = '';
$port = 3306;
$charset ='utf8mb4';
$dsn ="mysql:host=$host;dbname=$dbname;port=$port;charset=$charset";
//Options de debug de la BDD
$options = [
    \PDO::ATTR_ERRMODE              => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE   => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES     => false,

];

try{
    //Creation de la bdd avec les paramétres néccésaires
    $db = new \PDO($dsn, $user, $psw, $options);
    //Message pour la console
    echo 'Database connexion established !';
}
//Gestion des exeptions
catch(\PDOException $e){
    //On retourne le message d'erreur et le code d'erreur
    throw new \PDOException ($e -> getmessage(),$e -> getcode());
}



