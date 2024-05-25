<?php 
    include_once('header.php'); 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
   $ID = $_SESSION['ID_user'];
    if(!isset($_SESSION['ID_user'])){
        header('Location:form.php');
        die();
    }
    else {
        echo "yass !!!";
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bonjour <?php echo $_SESSION['user']; ?> ! </h1>
    
</body>
</html>