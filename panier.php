<?php 
// inclusion de l'en-tête
include_once('header.php');

// Inclusion du fichier de configuration de la base de données
include_once "config.php";

// Initialisation du tableau des IDs
$ids = [];

// Vérification de l'existence de la clé 'panier' et qu'il s'agit d'un tableau
if (isset($_SESSION['panier']) && is_array($_SESSION['panier'])) {
    // Récupération des clés du tableau 'panier'
    $ids = array_keys($_SESSION['panier']);
}

// Suppression d'un produit
if (isset($_GET['del'])) {
    $id_del = $_GET['del'];
    // Suppression de l'élément correspondant à l'ID dans 'panier'
    unset($_SESSION['panier'][$id_del]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="style.css">
</head>

<script>
    function modifierChiffre(operation) {
        var champChiffre = document.getElementById('chiffre');
        var valeurChiffre = parseInt(champChiffre.value); // Récupère la valeur actuelle du champ de saisie

        if (operation === '+') {
            valeurChiffre += 1; // Incrémente le chiffre de 1
        } else if (operation === '-') {
            valeurChiffre -= 1; // Décrémente le chiffre de 1
        }

        champChiffre.value = valeurChiffre; // Met à jour la nouvelle valeur dans le champ de saisie
    }
</script>

<body class="panier">
    <section>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
            <?php
            $total = 0;

            if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
                foreach ($_SESSION['panier'] as $id => $article) {
                    $total += $article['Prix'] * $article['quantite'];
            ?>

                        <tr>
                            <td><img src="images/<?= $product['Image'] ?>"></td>
                            <td><?= $article['Nom'] ?></td>
                            <td>Prix : <?= $article['Prix'] ?> €</td>
                            <td>Quantité : <?= $article['quantite'] ?>
                                <input id="price "type="number" id="chiffre" value="<?= $product_quantity ?>">

                                <button onclick="modifierChiffre('+')">+</button>
                                <button onclick="modifierChiffre('-')">-</button>

                            </td>
                            <td><a href="panier.php?del=<?= $product['id'] ?>"><i class='bx bxs-trash'></i></a></td>
                        </tr>
            <?php
                     }
                    } else {
                        echo "Votre panier est vide.";
                    }
            ?>
            <tr class="total">
                <th>Total : <?= $total ?> €</th>
            </tr>
        </table>
    </section>
</body>

</html>
