let form = document.getElementsByTagName('form');


let formSignUp = document.getElementById('register-form');


let inputU = document.getElementById('username');
let inputC = document.getElementById('password');

let login = document.getElementById('login');

let span_email = document.getElementById('span_email');

let errorMlogin = document.getElementById('log-in-p_error');
let errorMsignup = document.getElementById('signup-p_error');
let errorMsignup2 = document.getElementById('signup-p_error2');


let signupEmail = document.getElementById('sign-up-email');

let span_username = document.getElementById('span_username');

let loginBtn = document.getElementById('loginBtn');

let alogin = document.getElementById('alogin');

let singUp_active = document.getElementById('sign-up-act');

let singUp_inact = document.getElementById('sign-up-inact');

let login_active = document.getElementById('log-in-act');

let login_inact = document.getElementById('log-in-inact');

let fsingupBtn1 = document.getElementById('idfsingupBtn');

function fsingupC() {

    if (errorMlogin !== null && typeof errorMlogin !== 'undefined' && errorMlogin.style !== null) {
        errorMlogin.style.display = 'none';
    }

    singUp_inact.style.display = 'none';
    singUp_active.style.display = 'flex';
    singUp_active.style.animation = 'slide-in-left .5s cubic-bezier(.25, .46, .45, .94) both'
    login_inact.style.display = 'flex';
    login_inact.style.animation = 'slide-in-right .5s cubic-bezier(.25, .46, .45, .94) backwards'
    login_active.style.display = 'none';
}

function floginC() {
    if (errorMlogin !== null && typeof errorMlogin !== 'undefined' && errorMlogin.style !== null) {
        errorMlogin.style.display = 'none';
    }
    console.log("esS");

    singUp_inact.style.display = 'flex';
    singUp_inact.style.animation = 'slide-in-left .5s cubic-bezier(.25, .46, .45, .94) backwards'
    singUp_active.style.display = 'none';
    login_inact.style.display = 'none';
    login_active.style.display = 'flex';
    login_active.style.animation = 'slide-in-right .5s cubic-bezier(.25, .46, .45, .94) both'
}

function Finput() {
    console.log("Ss");

    // inputC.removeAttribute('class', 'shake-horizontal')
    // inputU.removeAttribute('class', 'shake-horizontal')
    // inputC.style.borderColor = 'rgba(0, 0, 255, 0)'
    // inputU.style.borderColor = 'rgba(0, 0, 255, 0)'
    errorMlogin.style.display = 'none';
    errorMsignup.style.display = 'none';
}


function Finput() {
    console.log("S");
    // inputC.removeAttribute('class', 'shake-horizontal')
    // inputU.removeAttribute('class', 'shake-horizontal')
    // inputC.style.borderColor = 'rgba(0, 0, 255, 0)'
    // inputU.style.borderColor = 'rgba(0, 0, 255, 0)'

    if (errorMlogin !== null && typeof errorMlogin !== 'undefined' && errorMlogin.style !== null) {
        errorMlogin.style.display = 'none';
    }
}

function validateForm() {


    let valor = signupEmail.value;

    let validacion = /^\w+@[a-zA-z]+[.][a-zA-z]+$/;

    // div_email.style.display = 'none';
    if (validacion.test(valor)) {
        errorMsignup2.style.display = 'none';

        return true;
    }
    else {

        console.log(validacion.test(valor));
        console.log(signupEmail.value)
        errorMsignup2.style.display = 'flex';
        // inputE.style.backgroundColor = '#00000000';
        return false;
    }
}










function closeAlert() {
    var overlay = document.getElementById("customAlertOverlay");
    var alertBox = document.getElementById("customAlert");

    overlay.style.display = "none";
    alertBox.style.display = "none";
}
