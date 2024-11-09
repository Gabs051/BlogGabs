function toggleForms() {
    const loginForm = document.getElementById("login-form-auth");
    const registerForm = document.getElementById("register-form-auth");
    const formTitle = document.getElementById("form-title-auth");
    const toggleBtn = document.getElementById("toggle-btn-auth");

    if (loginForm.style.display === "block") {
        loginForm.classList.add("fade-out");
        setTimeout(() => {
            loginForm.style.display = "none";
            registerForm.style.display = "block";
            formTitle.innerText = "Registro";
            toggleBtn.innerText = "Já tem uma conta? Entrar";
            registerForm.classList.remove("fade-out");
            registerForm.classList.add("add-in");
        }, 500);
    } else {
        registerForm.classList.add("fade-out");
        setTimeout(() => {
            loginForm.style.display = "block";
            registerForm.style.display = "none";
            formTitle.innerText = "Login";
            toggleBtn.innerText = "Registrar-se";
            loginForm.classList.remove("fade-out");
            loginForm.classList.add("fade-in");
        }, 500);
    }
}