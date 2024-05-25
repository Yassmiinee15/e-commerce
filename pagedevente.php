<?php
    require_once("config.php");
    session_start();
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Boutique</title>
    <link rel="stylesheet" href="ss/style.css">
</head>
<body>
    <!-- afficher le nombre de produit dans le panier-->
    <a href="panier.php" class="link">Panier<span><?=array_sum($_SESSION[''])?></span></a>
    <section class="products_list">
        <?php
        //afficher la liste des produits
        $req = mysqli_query($conn, "SELECT * FROM products");
        while ($row = mysqli_fetch_assoc($req)){ 

        ?>
        <div class="product">
            <div class="image_product">
                <img src="images/<?=$row['image']?>">
            </div>
            <div class="content">
                <h4 class="name"><?=$row['nom']?></h4>
                <h2 class="price"><?=$row['prix']?></h2>
                <a href="ajouter_panier.php?id=<?=$row['id']?>" class="id product">Ajouter au panier</a>
            </div>
        </div>
        <?php } ?>
        
    </section>
    
</body>
</html>             