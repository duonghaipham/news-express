// Validate the length of password
const password = document.querySelector("[name='new_password']");
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
const rePassword = document.querySelector("[name='re_new_password']");
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
const formUpdate = document.getElementById('update-form');
formUpdate.addEventListener('change', () => {
    const btnSave = document.getElementById('btn-save');
    btnSave.disabled = (document.getElementById('length-error') != null ||
        document.getElementById('match-error') != null);
});