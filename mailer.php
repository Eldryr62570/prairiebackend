<?php 
    //Insertion en bdd des tickets envoyés au support
   if(isset($_POST)){
    session_start();
    $to = 'jordan.moulin62570@gmail.com';
    $subject= $_POST["subject"];
    $tel = $_POST["tel"];
    $age = $_POST["age"];
    $message = $_POST["message"];
    try{
        $db = new PDO(
            'mysql:host=localhost;dbname=spawnarena;charset=utf8',
            'root',//Username de la BDD
            ''     //Password de la BDD
            
        );
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exeption $e){
        die('Erreur : ' . $e->getMessage());
    }
    //Requête
    $query = 'INSERT INTO email_send(subject, tel, age, message) VALUES (:subject, :tel, :age, :message)';
    //Preparation de la Requête
    $insertMail = $db ->prepare($query);
    //Insertion en Base
    $insertMail -> execute([
        'subject' => $_POST["subject"],
        'tel'=> $_POST["tel"],
        'age' => $_POST["age"],
        'message' => $_POST["message"],
    ]);

    //Envoie d'un mail 
    if(isset($_POST)){
    $message = '<h1> Problème du client :'.$_POST["message"].'</h1>';
    $headers[]= 'MIME-Version: 1.0'; 
    $headers[]= 'Content-type: text/html; charset=iso-8859-1';
    mail($to, $subject, $message, implode("\r\n", $headers));

    //On met true dans la session pour verifier si on a bien envoyé le mail
    if(isset($_SESSION)){
        $_SESSION["mysession"] = true;
    }
}
        
}
    header("Location:presentation.php");
?>