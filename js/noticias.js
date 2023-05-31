let noticias = document.getElementById('tNoticias');
let coches = document.getElementById('tCoches');
let eventos = document.getElementById('tEventos');
let sorteos = document.getElementById('tSorteos');
let usernames = document.getElementById('tUsuarios');


function openNoticias() {
    noticias.style.display = 'flex';
    coches.style.display = 'none';
    eventos.style.display = 'none';
    sorteos.style.display = 'none';
    usernames.style.display = 'none';
}
function openCoches() {
    noticias.style.display = 'none';
    coches.style.display = 'flex';
    eventos.style.display = 'none';
    sorteos.style.display = 'none';
    usernames.style.display = 'none';
}

function openEventos() {
    noticias.style.display = 'none';
    coches.style.display = 'none';
    eventos.style.display = 'flex';
    sorteos.style.display = 'none';
    usernames.style.display = 'none';
}
function openSorteos() {
    noticias.style.display = 'none';
    coches.style.display = 'none';
    eventos.style.display = 'none';
    sorteos.style.display = 'flex';
    usernames.style.display = 'none';
}

function openUsernames() {
    noticias.style.display = 'none';
    coches.style.display = 'none';
    eventos.style.display = 'none';
    sorteos.style.display = 'none';
    usernames.style.display = 'flex';
}





// function openNoticias() {
//     noticias.style.visibility = 'visible';
//     coches.style.visibility = 'hidden';
//     eventos.style.visibility = 'hidden';
//     sorteos.style.visibility = 'hidden';
//     console.log("Hola")
// }
// function openCoches() {
//     noticias.style.visibility = 'hidden';
//     coches.style.visibility = 'visible';
//     eventos.style.visibility = 'hidden';
//     sorteos.style.visibility = 'hidden';
// }

// function openEventos() {
//     noticias.style.visibility = 'hidden';
//     coches.style.visibility = 'hidden';
//     eventos.style.visibility = 'visible';
//     sorteos.style.visibility = 'hidden';
// }
// function openSorteos() {
//     noticias.style.visibility = 'hidden';
//     coches.style.visibility = 'hidden';
//     eventos.style.visibility = 'hidden';
//     sorteos.style.visibility = 'visible';
// }