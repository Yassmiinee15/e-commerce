<?php 
require_once ('config.php'); // Connexion à la base de données 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeaderNya</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="yass.css">
    <style>
        .error-message {
            color: ed;
        }
    </style>
</head>

<body>
    <?php require_once 'Header.php'; ?>
     
    <section id="page"> <!-- Page complete (HTML)-->
        
        <form action="form2.php" method="GET"  > <!-- Formulaire de connexion (HTML)-->
            <div class="formtab">

                <div id="formconnect">
                    <h1 id="seconnecter">Se connecter</h1>
                </div>

                <div class="input-control2">
                    <input name="email2" id="email2" type="text" placeholder="Email">
                    <div class="error-message" id="emailError"></div>
                </div>

                <div class="input-control2">
                    <input name="password3" id="password3" type="password" placeholder="Mot de passe">
                    <div class="error-message" id="passwordError"></div>
                </div>

                

                <button type="submit" name='Validate'>Se connecter</button> <!-- Bouton de connexion -->
                
                <button class="ghost">
                    <a href="inscription2.php">Créer un compte</a>
                </button>

                <button class="ghost">
                    <a href="inscription2.php">Se déconnecter</a>
                </button>


            </div>
        </form>

        <form action="form2.php" method="GET" >
            <div style=color:red;>
                <h1>Mot de passe INCORECCCTTTT!!!</h1>
                
            </div>
            <input name="user" >

            <input name="mdp" placeholder="ecris">

            <button type="submit">
                yas
            </button>

          

        
        </form>
    </section>

    <script src="form_javascript.js"></script>



</body>
</html>

