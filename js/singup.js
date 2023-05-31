let form = document.getElementsByTagName('form');

let inputU = document.getElementById('username');
let inputE = document.getElementById('email');
let inputP = document.getElementById('password');

let p_error = document.getElementById('p_error');

let divE = document.getElementById('div_input_email');
let divU = document.getElementById('div_input_username');


let sing = document.getElementById('sing');

let div_email = document.getElementById('div_email');

let span_username = document.getElementById('span_username');

let asing = document.getElementById('asingup');

function validarEmailFocus() {
    divE.style.border = '4px rgba(0, 0, 255, 0)  solid';
    // sing.style.height = '65%';
    div_email.style.display = 'none';
}

function validarEmail() {
    let valor = form[0]['elements']['email']['value'];

    let validacion = /^\w+@[a-zA-z]+[.][a-zA-z]+$/;;

    if (valor.length == 0) {
        // inputE.style.border = '4px rgba(0, 0, 255, 0)  solid';
        divE.style.border = '4px rgba(0, 0, 255, 0)  solid';

        // sing.style.height = '65%';
        // inputE.style.backgroundColor = '#00000000';


        div_email.style.display = 'none';
    }
    else if (validacion.test(valor)) {
        // inputE.style.borderColor = 'rgba(86, 223, 86, 0.603)';
        divE.style.border = '4px rgba(86, 223, 86, 0.603)  solid';
        // sing.style.height = '65%';

        // inputE.style.backgroundColor = '#00000000';


    }
    else {
        // inputE.style.borderColor = 'rgba(223, 86, 86, 0.603)'
        // sing.style.height = '75%';
        divE.style.border = '4px rgba(223, 86, 86, 0.603)  solid';
        div_email.style.display = 'flex';
    }
}

function validarUsername() {
    let valor = form[0]['elements']['username']['value'];
    let validacion = /^[A-Za-z]*$/;

    console.log(valor.length);

    if (valor.length == 0) {
        // inputU.style.border = '4px rgba(0, 0, 255, 0)  solid';
        divU.style.border = '4px rgba(0, 0, 255, 0)  solid';

        console.log(valor.length);
        // sing.style.height = '65%';
        span_username.style.display = 'none';
    }
    else if (validacion.test(valor)) {
        // inputU.style.borderColor = 'rgba(86, 223, 86, 0.603)';
        divU.style.border = '4px rgba(86, 223, 86, 0.603)  solid';
        // sing.style.height = '65%';
        span_username.style.display = 'none';
    }
    else {
        // inputU.style.borderColor = 'rgba(223, 86, 86, 0.603)'
        divU.style.borderColor = 'rgba(223, 86, 86, 0.603)';
        // sing.style.height = '75%';
        span_username.style.display = 'flex';
    }
}

function validarPassword() {
    let valor = form[0]['elements']['password']['value'];

    // let validacion = /^.{4,}$/;
    // let validacion2 = /(?=.*\d{2}).{7,}/;
    let validacion = /^(?=.*\d{2})(?=.*[a-z])(?=.*[-_\.+@])(?=.*[A-Z])[A-Za-z\d\-_.+@]{11,}$/;

    if (valor.length == 0) {
        inputP.style.border = '4px rgba(0, 0, 255, 0)  solid';
        p_error.style.display = 'none';
    }
    else if (validacion.test(valor)) {
        inputP.style.borderColor = 'rgba(86, 223, 86, 0.603)';
        p_error.style.display = 'none';
    }
    else {
        inputP.style.borderColor = 'rgba(223, 86, 86, 0.603)'
        p_error.style.display = 'flex';
    }
}

function validarPasswordFocus() {
    inputP.style.border = '4px rgba(0, 0, 255, 0)  solid';
    p_error.style.display = 'none';

}


function fsingupBtn() {
    let valor = form[0]['elements']['email']['value'];
    let valor2 = form[0]['elements']['username']['value'];
    let valor3 = form[0]['elements']['password']['value'];

    console.log(valor)
    console.log(valor2)
    if (valor.length > 0 && valor2.length > 0 && valor3.length > 0) {
        console.log('yes')
        window.open('inicio.php', '_self');
    }
    else {
        console.log('no')
    }
}