let main = document.getElementsByTagName('main')[0];
let nav = document.getElementsByTagName('nav')[0];

let body = document.getElementsByTagName('body')[0];
let hamburguer = document.getElementById('div-hamburguer');
let div_hamburguer = document.getElementById('div-hamburguer');

let main_div = document.getElementById('div1');

let display = false;


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
        body.style.overflow = 'hidden'
        main_div.style.visibility = 'hidden'
        hamburguer.style.display = 'flex'
    }
}

let myMediaQuery = window.matchMedia('(max-width: 790px)');
function widthChangeCallback(myMediaQuery) {
    hamburguer.classList.remove('div-hamburgers');
    body.style.overflow = 'auto'
    main_div.style.visibility = 'visible'
    hamburguer.style.display = 'none'
    console.log('up');
}
myMediaQuery.addEventListener('change', widthChangeCallback);