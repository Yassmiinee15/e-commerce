<?php 
require_once('config.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="yass.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>



    <section id="page">
        <div class="header">
            <div class="headertab">
                <div class="headerpage">
                    <p><a href="accueil.php">Accueil</a></p>
                    
                    <p><a href="logout.php">deconnection</a></p>
                    
                    <p><a href="Homme.php">Homme</a></p>
                    <p><a href="Femme.php">Femme</a></p>
                    <p><a href="Enfant.php">Enfant</a></p>

                    <p><a href="Contact.php">Contact</a></p>

                    <?php
                    if(isset($_SESSION['ouvert'])) {
                        echo "<p><a href='Homme.php'>session ouverte</a></p>";
                    
                    }
                    else {
                        unset($_SESSION['NOA']);
                        echo "<p><a href='Homme.php'>session fermé</a></p>";
                    
                    }
                    ?>
                </div>

                <a href="accueil.php" class="logo"><img src="images/logo.png" alt=""></a>

                <div class="icon">
                    <p><a href="#"><i class='bx bx-search'></i></a></p>
                    <p><a href="form.php"><i class='bx bx-user' ></i></a></p>
                    <p><a href="panier.php"><i class='bx bx-cart' ></i></a></p>
                </div>

            </div>

        </div>

    </section>

</body>
</html>