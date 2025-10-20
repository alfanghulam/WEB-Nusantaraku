function togglePasswordVisibility(id) {
    const passwordField = document.getElementById(id);
    const toggleIcon = passwordField.nextElementSibling;
    
    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.innerHTML = "&#128064;"; // Ikon mata terbuka
    } else {
        passwordField.type = "password";
        toggleIcon.innerHTML = "&#128065;"; // Ikon mata tertutup
    }
}