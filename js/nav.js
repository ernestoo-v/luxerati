let main = document.getElementsByTagName('main')[0];
let nav = document.getElementsByTagName('nav')[0];

let body = document.getElementsByTagName('body')[0];
let hamburguer = document.getElementById('div-hamburguer');
let div_hamburguer = document.getElementById('div-hamburguer');


// l    et menu_cerrar_sesion = document.getElementById('dropDownMenu');

let menu_cerrar_sesion = document.getElementById('myDropdown');

let main_div = document.getElementById('div1');

function hamburguer_menu() {

    if (main_div.style.visibility === 'hidden') {
        hamburguer.classList.add('div-hamburgers2')
        setTimeout(function () {

            hamburguer.classList.remove('div-hamburgers');
            hamburguer.classList.remove('div-hamburgers2')

            body.style.overflow = 'auto'
            main_div.style.visibility = 'visible'
            hamburguer.style.display = 'none'
        }, 430);
        console.log('up');
    }

    else {
        console.log(main_div.style.visibility)
        console.log('down')
        hamburguer.classList.add('div-hamburgers');
        body.style.overflow = 'hidden';


        main_div.style.visibility = 'hidden'
        hamburguer.style.display = 'flex'
    }
}


let myMediaQuery = window.matchMedia('(max-width: 845px)');
function widthChangeCallback(myMediaQuery) {
    hamburguer.classList.remove('div-hamburgers');
    body.style.overflow = 'auto'
    main_div.style.visibility = 'visible'
    hamburguer.style.display = 'none'
    console.log('up');
}

function myFunction() {
    if (menu_cerrar_sesion.style.display === 'flex') {
        menu_cerrar_sesion.style.display = ''
    }
}




function openMenu() {

    if (menu_cerrar_sesion.style.display === '') {
        menu_cerrar_sesion.style.display = 'flex';
    }
    else if (menu_cerrar_sesion.style.display === 'flex') {
        menu_cerrar_sesion.style.display = ''
    }
    console.log("D")
}

//FOOTTER
let year = document.getElementById("year");

year.textContent = new Date().getFullYear();
myMediaQuery.addEventListener('change', widthChangeCallback);