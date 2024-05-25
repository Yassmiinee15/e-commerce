<?php
$erreur = ""; // Initialiser la variable d'erreur

if(isset($_POST['Validate'])) {
    if(empty($_POST['email2']) || empty($_POST['password3'])) {
        $erreur = "Veuillez remplir tous les champs.";
    } else {
        $email = htmlspecialchars($_POST['email2']);
        $password = htmlspecialchars($_POST['password3']);
        $email = strtolower($email); // email transformé en minuscule
        $select = mysqli_query($conn, "SELECT * FROM utilisateur WHERE Email = '$email' ");
        $row = mysqli_num_rows($select); // Compter le nombre de ligne ayant rapport a la requette SQL

        // Vérification que la requête a réussi
        if (!$select) {
            die("Requête échouée: " . mysqli_error($conn));
        }


        $row = mysqli_fetch_assoc($select);
        if($row) {
            $hash = $row['Pass']; //Récupération du mot de passe haché depuis la base de donnée
            
            if (password_verify($password,$hash)) {
                //Mot de passe valide, on démarre la session et on redirige vers la page de contact
                $_SESSION['ID'] = $row['ID_user'];
                header("Location: contact.php");
                exit(); //Assurer-vous de quitter le script après la redirection
            }
            else {
                $erreur = "Adresse Mail ou Mot de passe incorrects !";
            }
        } else {
            $erreur = "Adresse Mail ou Mot de passe incorrect !";
            }
    }
}
        
?>