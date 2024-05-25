function validateForm() {
    var email = document.getElementById("email2").value;
    var password = document.getElementById("password3").value;
    var emailError = document.getElementById("emailError");
    var passwordError = document.getElementById("passwordError");
    var globalError = document.getElementById("globalError");
    var isValid = true;

    // Reset previous error messages
    emailError.textContent = ""; 
    passwordError.textContent = "";
    globalError.textContent = "";

    // Check if email is empty
    if (email === "") {
        emailError.textContent = "Veuillez saisir votre adresse email.";
        isValid = false;
    }

    // Check if password is empty
    if (password === "") {
        passwordError.textContent = "Veuillez saisir votre mot de passe.";
        isValid = false;
    }

    // Check if either email or password is empty
    if (!isValid) {
        globalError.textContent = "Veuillez remplir tous les champs.";
    }

   

    return isValid;
}