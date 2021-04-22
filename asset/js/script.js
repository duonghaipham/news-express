// Open login window when click Login button
let loginButton = document.getElementById("login-btn");
loginButton.addEventListener("click", () => {
    let modalLogin = document.getElementById("modal-login");
    modalLogin.style.display = "block";
});

// Close login window when click outside the form
let modalLogin = document.getElementById('modal-login');
window.addEventListener("click", (event) => {
    if (event.target === modalLogin)
        modalLogin.style.display = "none";
});

// Open signup window when click Signup button
let signupButton = document.getElementById("signup-btn");
signupButton.addEventListener("click", () => {
    let modalSignup = document.getElementById("modal-signup");
    modalSignup.style.display = "block";
});

// Close signup window when click outside the form
let modalSignup = document.getElementById('modal-signup');
window.addEventListener("click", (event) => {
    if (event.target === modalSignup)
        modalSignup.style.display = "none";
});