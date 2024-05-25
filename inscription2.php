<?php 
require_once ('config.php'); // Connexion à la base de données 
include_once('header.php');
?>


<html lang="fr">
<head>
<meta charset="UTF-8">
    <title>Inscritpion</title>
    <link rel="stylesheet" href="yass.css">
    
</head>

<body>
<h1>Inscritpion</h1>

    <form id="form" action="inscription_traitement.php" method="POST">
        <h1>Inscritpion</h1>
        <div class="input-control">
                    <input name="nom" id="nom" type="text" placeholder="Nom">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <input name="prenom" id="prenom" type="text" placeholder="Prenom">
                    <div class="error"></div>
                </div>

                <div class="input-control">
                    <input name="email" id="email" type="text" placeholder="email">
                    <div class="error"></div>
                </div>
                        
                <div class="input-control">
                    <input name="password" id="password" type="password" placeholder="Mot de passe">
                    <div class="error"></div>
                </div>

                <div class="input-control">
                    <input name="password2" id="password2" type="password" placeholder="Confirmez Mot de passe">
                    <div class="error"></div>
                </div>

                <button type="submit" name='Validate'>
                    <div class="button2" href="form.php">S'inscrire</div>
                    <?php 
                    ?>
                </button> <!-- Bouton de connexion -->

                


    </form>

<script src="js/Verif.js"></script>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
    const headerHeight = document.querySelector('header').offsetHeight;
    const form = document.getElementById('form');
    form.style.marginTop = headerHeight + 'px';
});
</script>
</body>



