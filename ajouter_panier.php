<?php
//inclure la page de connexion
 include_once "config.php";
 //verifier si une session existe
 if(!isset($_SESSION)){
    //si non demarer la session
    session_start();
 }
 if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM produit WHERE id = $id";
    $resultat = mysqli_query($conn, $query);

    if ($resultat && mysqli_num_rows($resultat) > 0) {
        $produit = mysqli_fetch_assoc($resultat);

        if (!isset($_SESSION['panier'][$id])) {
            $_SESSION['panier'][$id] = [
                'Nom' => $produit['Nom'],
                'Prix' => $produit['Prix'],
                'quantite' => 1 // Commence avec une quantité de 1
            ];
        } else {
            $_SESSION['panier'][$id]['quantite']++; // Incrémente la quantité si l'article est déjà dans le panier
        }

        header("Location: panier.php");
        exit();
    } else {
        echo "Produit non trouvé.";
    }
}
?>

