<?php 
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9121f1a0ce.js" crossorigin="anonymous"></script>
    <link href="Asset/css/style.css" rel="stylesheet" type="text/css">
    <title>Spawn Arena - Presentation</title>
</head>

<body>
    <?php 
        require_once("./Asset/script/navbar.php");
        require_once("./Asset/script/card.php");
        require_once("./Asset/script/formulaire.php");
        require_once("./Asset/script/footer.php");
        require_once("./Asset/script/modaux.php");
    ?>
    <?php
        if(isset($_SESSION)){
            //On vide la session pour que le message ne s'afficher qu'une fois
            $_SESSION = array();
        }
    ?>
    






</body>

</html>