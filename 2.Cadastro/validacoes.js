const $meuform = document.querySelector('form');

$meuform.addEventListener
(
    'submit', function criaPostController(infosDoEvento)
    {
        infosDoEvento.preventDefault();
        let $usuario = document.getElementById('nome_reg').value
        console.log($usuario)
    }
);
//---------------------------------------Validações------------------------------------------

function onChangeEmail() {
    toggleButtonsDisable();
    toggleEmailErrors();
}

function onChangePassword() {
    toggleButtonsDisable();
    togglePasswordErrors();
} 

function toggleEmailErrors() {
    const email = document.getElementById("mail_log").value;
    if (!email) {
        document.getElementById("email-required-error").style.display = "block";
    } else {
        document.getElementById("email-required-error").style.display = "none";
    }
    
    if (validateEmail(email)) {
        document.getElementById("email-invalid-error").style.display = "none";
    } else {
        document.getElementById("email-invalid-error").style.display = "block";
    }
}

function togglePasswordErrors() {
    const password = document.getElementById("pass_log").value;
    if (!password || password.length < 8) {
       document.getElementById("password-required-error").style.display = "block";
    } else {
       document.getElementById("password-required-error").style.display = "none";
    }
}

function toggleButtonsDisable() {
    const emailValid = isEmailValid();
    const passwordValid = isPasswordValid();
    document.getElementById("btn_registro").disabled = !emailValid || !passwordValid;
}

function isEmailValid() {
    const email = document.getElementById("mail_log").value;
    if (!email) {
        return false;
    }
    return validateEmail(email);
}

function isPasswordValid() {
    const password = document.getElementById("pass_log").value;
    if (!password || password.length < 8) {
        return false;
    }
    return true;
}

function validateEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

//-----------------------------------------------------

