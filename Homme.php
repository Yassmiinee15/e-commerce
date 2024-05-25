<?php 
include_once('header.php');
require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="stylesheet" href="yass.css">

</head>
<body>
    <!-- afficher le nombre de produit dans le panier -->
    
    <section class="products_list">
    <form action="" method="post" class="filter-form">
            <label for="max-price">Afficher les produits dont le prix est inférieur à :</label>
            <input type="number" id="max-price" name="max-price" min="0">
            <button type="submit">Filtrer</button>
            <?php 
           if(isset($_SESSION['ID_user'])){
                
                $id = $_SESSION['ID_user'];

                echo "<h1>MEESI</h1>";
            }
            else {
                echo "<h1>MBAPPE</h1>";   
            }
            ?>
           

        </form>
        <?php 
        //inclure la page de connexion
        include_once "config.php";
        //afficher la liste des produits
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $maxPrice = $_POST["max-price"];
            $req = mysqli_query($conn, "SELECT * FROM produit WHERE genre = 'Chaussure pour homme' AND Prix < $maxPrice");
        } else {
            $req = mysqli_query($conn, "SELECT * FROM produit WHERE  genre = 'Chaussure pour homme' ");
        }
         while($row = mysqli_fetch_assoc($req)){ 
        ?>
        <form action="" class="product"> 
            <div class="image_product">
                <a href="product.php?id=<?php echo $row["ID_produit"];?>"><img src="images/<?=$row['Image']?>">
            </div>
            <div class="content">
                <h4 class="name"><?=$row['Nom']?></h4>
                <div class="sho">Chaussure pour homme</div>
                <h2 class="price"><?=$row['Prix']?> €</h2>
            </div>
        </form>

        <?php } ?>
       
    </section>
    <div class="contact-footer">
      <h3>Follow Us</h3>
      <div class="social-links">
        <a href="#"><i class='bx bxl-facebook-circle'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-linkedin-square'></i></a>
        <a href="#"><i class='bx bxl-youtube'></i></a>
      </div>
    </div>
</body>
</html>

