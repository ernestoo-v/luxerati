let inputB = document.getElementById('search-input');

inputB.setAttribute('onkeyup', 'buscar()');

let card = document.getElementsByClassName('div-contenido');
let nameB = document.getElementsByClassName('search-name');

let marca = document.getElementsByClassName('search-car-marca');


function buscar() {
    console.log("S")


    for (let i = 0; i < card.length; i++) {
        if (nameB[i].textContent.toLowerCase().includes(inputB.value.toLowerCase())) {
            card[i].style.display = '';
        }
        else {

            card[i].style.display = 'none';
        }
    }
}