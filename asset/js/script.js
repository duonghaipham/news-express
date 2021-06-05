// Open login window when click Login button
const loginButton = document.getElementById("login-btn");
loginButton.addEventListener("click", () => {
    let modalLogin = document.getElementById("modal-login");
    modalLogin.style.display = "block";
});

// Close login window when click outside the form
const modalLogin = document.getElementById('modal-login');
window.addEventListener("click", (event) => {
    if (event.target === modalLogin)
        modalLogin.style.display = "none";
});

// Open signup window when click Signup button
const signupButton = document.getElementById("signup-btn");
signupButton.addEventListener("click", () => {
    let modalSignup = document.getElementById("modal-signup");
    modalSignup.style.display = "block";
});

// Close signup window when click outside the form
const modalSignup = document.getElementById('modal-signup');
window.addEventListener("click", (event) => {
    if (event.target === modalSignup)
        modalSignup.style.display = "none";
});

const username = document.getElementById('signup-username');
$(() => {
    username.addEventListener('blur', () => {
        const username_text = username.value;
        $.ajax({
            url: 'http://localhost/news-express/index.php?controller=User&action=username_available',
            method: 'post',
            data: {username: username_text},
            dataType: "text",
            success: (isAvailable) => {
                if (!isAvailable) {
                    if (document.getElementById('duplicate-error') == null) {
                        const duplicateError = document.createElement('p');
                        duplicateError.setAttribute('id', 'duplicate-error');
                        duplicateError.setAttribute('class', 'error');
                        duplicateError.innerHTML = "Tên đăng nhập đã tồn tại!";
                        username.parentNode.insertBefore(duplicateError, username.nextSibling);
                    }
                }
                else {
                    const duplicate_error = document.getElementById('duplicate-error');
                    if (duplicate_error != null)
                        duplicate_error.remove();
                }
            }
        });
    });
});

// Validate the length of password
const password = document.querySelector("[name='signup_password']");
password.addEventListener('blur', () => {
   if (password.value.length < 8) {
       if (document.getElementById('length-error') === null) {
           const lengthError = document.createElement('p');
           lengthError.setAttribute('id', 'length-error');
           lengthError.setAttribute('class', 'error');
           lengthError.innerHTML = "Mật khẩu phải có ít nhất 8 ký tự!";
           password.parentNode.insertBefore(lengthError, password.nextSibling);
       }
   }
   else {
       const lengthError = document.getElementById('length-error');
       if (lengthError !== null)
           lengthError.remove();
   }
});

// Validate values between password and re-password
const rePassword = document.querySelector("[name='re_password']");
rePassword.addEventListener('blur', () => {
    if (password.value !== rePassword.value) {
        if (document.getElementById('match-error') === null) {
            const matchError = document.createElement('p');
            matchError.setAttribute('id', 'match-error');
            matchError.setAttribute('class', 'error');
            matchError.innerHTML = 'Mật khẩu không khớp!';
            rePassword.parentNode.insertBefore(matchError, rePassword.nextSibling);
        }
    }
    else {
        const matchError = document.getElementById('match-error');
        if (matchError !== null)
            matchError.remove();
    }
});

// Generally validate form for disabling button submit
const formSignup = document.getElementById('signup-form');
formSignup.addEventListener('change', () => {
    const btnSignup = document.getElementById('btn-signup');
    btnSignup.disabled = (document.getElementById('duplicate-error') != null ||
        document.getElementById('length-error') != null ||
        document.getElementById('match-error') != null);
});