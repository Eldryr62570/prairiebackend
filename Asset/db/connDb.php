<?php 
$host = 'localhost';
$dbname = 'spawnarena';
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
    $db = new \PDO($dsn, $user, $psw, $options);
    echo 'Database connexion established';

}
//Gestion des exeptions
catch(\PDOException $e){
    throw new \PDOException ($e -> getmessage(),$e -> getcode());
}



