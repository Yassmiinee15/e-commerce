<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ya");
$conn -> set_charset("utf8");



$username = $_GET["email2"];
$password = $_GET["password3"];



$sql = "SELECT * FROM `utilisateur` WHERE Email ='$username' and Pass='$password'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {

    $_SESSION['ouvert'] = $row['ID_user'];
    header("Location: accueil.php");


} 
else {
    $_SESSION["IDENTIFIANT"] = false;
    header("Location: form.php");

}


?>